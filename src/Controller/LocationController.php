<?php

namespace App\Controller;

use App\Entity\Residence;
use App\Entity\Rent;
use App\Form\LocataireType;
use App\Form\LocationType;
use App\Repository\RentRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LocationController extends AbstractController
{
    public function createLocation(Request $request, RentRepository $rentRepository): Response
    {

        $rent = new Rent();

        $form = $this->createForm(LocationType::class, $rent);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($rent);
                $manager->flush();
                $this->addFlash(
                    'success',
                    sprintf("La location %s a été ajoutée !",
                        $rent->getId())
                );
                return $this->redirectToRoute('locataires', [
                    'id' => $rent->getId()]);
            }
            else {
                $this->addFlash(
                    'success',
                    "Erreur, la location n'est pas valide !"
                );
            }
        }

        $rent = $rentRepository->findAll();

        return $this->render('locations/create.html.twig', [
            'form' => $form->createView(),
            'rent' => $rent,
        ]);
    }
}