<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LocataireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MandataireController extends AbstractController
{
    public function createUser(Request $request): Response
    {

        $user = new User();

        $form = $this->createForm(LocataireType::class, $user);

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
}