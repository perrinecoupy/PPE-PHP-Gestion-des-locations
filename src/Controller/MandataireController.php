<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LocataireType;
use App\Form\MandataireType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MandataireController extends AbstractController
{
    public function createUser(Request $request): Response
    {

        $user = new User();

        $form = $this->createForm(MandataireType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                $this->addFlash(
                    'success',
                    sprintf("Le mandataire %s a été ajoutée !",
                        $user->getId())
                );
                return $this->redirectToRoute('mandataires', [
                    'id' => $user->getId()]);
            }
            else {
                $this->addFlash(
                    'success',
                    "Erreur, le mandataire n'est pas valide !"
                );
            }
        }

        return $this->render('mandataires/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editUser(UserRepository $userRepository, Request $request, int $id)
    {
        $user = $userRepository->find($id);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('Le mandataire avec l\'id %s n\'a pas été trouvé', $id));
        }

        $form = $this->createForm(MandataireType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                sprintf('Le mandataire %s a été modifiée !',
                    $user->getId())
            );

            return $this->redirectToRoute('mandataires', [
                'id' => $user->getId()]);
        }

        return $this->render('mandataires/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}