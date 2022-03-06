<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
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
		//return $this->render('default/article.html.twig', ['articles' => self::ARTICLES]);
		return $this->render('locataires/index.html.twig', ['users' => $userRepository->findByRoleLocataire()]);
	}

    public function mandataires(UserRepository $userRepository): Response
    {
        //return $this->render('default/article.html.twig', ['articles' => self::ARTICLES]);
        return $this->render('mandataires/index.html.twig', ['users' => $userRepository->findByRoleMandataire()]);
    }
}