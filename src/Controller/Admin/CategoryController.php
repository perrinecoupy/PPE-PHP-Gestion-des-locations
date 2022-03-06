<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
	public function createCategory(Request $request): Response
	{

		$category = new Category();

		$form = $this->createForm(CategoryType::class, $category);

		$form->handleRequest($request);

		if ($form->isSubmitted()) {
        	if ($form->isValid()) {
        		$manager = $this->getDoctrine()->getManager();
	        	$manager->persist($category);
	        	$manager->flush();
        		$this->addFlash(
	            'success',
	            sprintf('La catégorie %s a été ajoutée !',
	            $category->getTitle())
	        	);
	        	return $this->redirectToRoute('admin_category_edit', [
        		'id' => $category->getId()]);
        	}
        	else {
        		$this->addFlash(
            	'success',
            	"Erreur, la catégorie n'est pas valide !"
        	);
        	}
		}

		return $this->render('admin/category/create.html.twig', [
			'form' => $form->createView(),
		]);
	}

	public function editCategory(CategoryRepository $categoryRepository, Request $request, int $id)
	{
		$category = $categoryRepository->find($id);

		if (null === $category) {
			throw new NotFoundHttpException(sprintf('The category with id %s was not found.', $id));
		}

		$form = $this->createForm(CategoryType::class, $category);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->getDoctrine()->getManager()->flush();

			$this->addFlash(
            	'success',
            	sprintf('La catégorie %s a été modifiée !',
            	$category->getTitle())
        	);

			return $this->redirectToRoute('admin_category_edit', [
				'id' => $category->getId()]);
		}

		return $this->render('admin/category/edit.html.twig', [
			'form' => $form->createView(),
		]);
	}
}