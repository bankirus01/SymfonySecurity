<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use Doctrine\ORM\Mapping\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repository->findAll();
        //var_dump($articles);
        //exit;

        return $this->render('default/index.html.twig', [
            "articles" => $articles
        ]);

    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function deleteAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $user = $repository->find($id);
        $em = $this->getDoctrine()->getManager();

        if ($user) {
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/create", name="create")
     */
    public function createAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('default/create.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $article = $em->getRepository(Article::class)->find($id);

        if ($article == null ) {
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('default/edit.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/search", name="search")
     */
    public function searchAction(Request $request)
    {
        $keyword = $request->get('q');
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Article::class);

        $article = $repository->searchByName($keyword);

        return $this->render('default/index.html.twig', [
            "articles" => $article
        ]);
    }
}
