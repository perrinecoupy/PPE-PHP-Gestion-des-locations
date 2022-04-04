<?php

namespace App\Controller;

use App\Entity\Residence;
use App\Form\BienType;
use App\Repository\ResidenceRepository;
use App\Repository\RentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BienController extends AbstractController
{
    public function createBien(Request $request, RentRepository $rentRepository): Response
    {

        $bien = new Residence();

        $form = $this->createForm(BienType::class, $bien);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($bien);
                $manager->flush();
                $this->addFlash(
                    'success',
                    sprintf("Le bien %s a été ajouté !",
                        $bien->getId())
                );
                return $this->redirectToRoute('biens', [
                    'id' => $bien->getId()]);
            }
            else {
                $this->addFlash(
                    'success',
                    "Erreur, le bien n'est pas valide !"
                );
            }
        }

        $bien = $rentRepository->findAll();

        return $this->render('biens/create.html.twig', [
            'form' => $form->createView(),
            'rent' => $bien,
        ]);
    }

    public function editBien(ResidenceRepository $residenceRepository, Request $request, int $id, RentRepository $rentRepository)
    {
        $bien = $residenceRepository->find($id);

        if (null === $bien) {
            throw new NotFoundHttpException(sprintf('Le bien avec l\'id %s n\'a pas été trouvé', $id));
        }

        $form = $this->createForm(BienType::class, $bien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                sprintf('Le bien %s a été modifié !',
                    $bien->getId())
            );

            return $this->redirectToRoute('biens', [
                'id' => $bien->getId()]);
        }

        $bien = $rentRepository->findAll();

        return $this->render('biens/create.html.twig', [
            'form' => $form->createView(),
            'user'=> $bien,
            'rent' => $bien,
        ]);
    }
}