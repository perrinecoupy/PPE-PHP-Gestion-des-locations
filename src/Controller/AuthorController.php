<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthorController extends AbstractController
{
	public function author(AuthorRepository $authorRepository): Response
	{
		return $this->render('author/author.html.twig', ['author' => $authorRepository->findAll()]);
	}

	public function showAuthor(AuthorRepository $authorRepository, ArticleRepository $articleRepository, int $id): Response
	{
		$author = $authorRepository->find($id);

		if (null === $author) {
			throw new NotFoundHttpException(sprintf("Author not found", $id));
		}

		$articleAuthor = $articleRepository->findLastByAuthor($author);

		return $this->render('author/showAuthor.html.twig', ['articleAuthor' => $articleAuthor, 'author' => $author]);
	}

	public function article(ArticleRepository $articleRepository, int $id): Response
	{
		$article = $articleRepository->find($id);

		if (null === $article) {
			throw new NotFoundHttpException(sprintf("Article not found", $id));
		}

		return $this->render('author/article.html.twig', ['article' => $article]);
	}
}