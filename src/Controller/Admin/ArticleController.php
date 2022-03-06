<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
	public function createArticle(Request $request): Response
	{

		$article = new Article();

		$form = $this->createForm(ArticleType::class, $article);

		$form->handleRequest($request);

		if ($form->isSubmitted()) {
        	if ($form->isValid()) {
        		$manager = $this->getDoctrine()->getManager();
	        	$manager->persist($article);
	        	$manager->flush();
        		$this->addFlash(
	            'success',
	            sprintf("L'article %s a été ajoutée !",
	            $article->getTitle())
	        	);
	        	return $this->redirectToRoute('admin_article_edit', [
        		'id' => $article->getId()]);
        	}
        	else {
        		$this->addFlash(
            	'success',
            	"Erreur, l'article n'est pas valide !"
        	);
        	}
		}

		return $this->render('admin/category/create.html.twig', [
			'form' => $form->createView(),
		]);
	}

	public function editArticle(ArticleRepository $articleRepository, Request $request, int $id)
	{
		$article = $articleRepository->find($id);

		if (null === $article) {
			throw new NotFoundHttpException(sprintf('The article with id %s was not found.', $id));
		}

		$form = $this->createForm(ArticleType::class, $article);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->getDoctrine()->getManager()->flush();

			$this->addFlash(
            	'success',
            	sprintf("L'article' %s a été modifiée !",
            	$article->getTitle())
        	);

			return $this->redirectToRoute('admin_article_edit', [
				'id' => $article->getId()]);
		}

		return $this->render('admin/category/edit.html.twig', [
			'form' => $form->createView(),
		]);
	}
}