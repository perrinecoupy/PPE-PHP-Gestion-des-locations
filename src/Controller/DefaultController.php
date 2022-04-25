<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Residence;
use App\Repository\ArticleRepository;
use App\Repository\RentRepository;
use App\Repository\UserRepository;
use App\Repository\ResidenceRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends AbstractController
{

    #[Route('/index', name: 'index')]
    public function index(Request $request): Response
    {

        if($this->getUser()){
            $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
            return $this->render('default/default.html.twig',[
                'user'=>$user
            ]);
        }
        return $this->redirectToRoute('login');
    }

	public function locataires(UserRepository $userRepository): Response
	{
        if($this->getUser()){
            $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
            return $this->render('locataires/index.html.twig',[
                'users' => $userRepository->findByRoleLocataire(),
                'user'=>$user
            ]);
        }
        return $this->redirectToRoute('login');
	}

    public function mandataires(UserRepository $userRepository): Response
    {
        if($this->getUser()){
            $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
            return $this->render('mandataires/index.html.twig',[
                'users' => $userRepository->findByRoleMandataire(),
                'user'=>$user
            ]);
        }
        return $this->redirectToRoute('login');
    }

    public function biens(ResidenceRepository $residenceRepository): Response
    {
        if($this->getUser()){
            $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
            return $this->render('biens/index.html.twig',[
                'residence' => $residenceRepository->findAll(),
                'user'=>$user
            ]);
        }
        return $this->redirectToRoute('login');
    }

    public function locations(RentRepository $rentRepository): Response
    {
        //return $this->render('default/article.html.twig', ['articles' => self::ARTICLES]);
        return $this->render('locations/create.html.twig', ['rent' =>$rentRepository->findAll()]);
    }

    public function showLocations(RentRepository $rentRepository, ResidenceRepository $residenceRepository): Response
    {
        //return $this->render('default/article.html.twig', ['articles' => self::ARTICLES]);
        return $this->render('locations/show.html.twig', ['rent' =>$rentRepository->findAll(), 'residence' =>$residenceRepository->findAll()]);
    }
}