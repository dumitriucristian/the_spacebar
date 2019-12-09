<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/article/admin", name="article_admin")
     */
    public function index()
    {
        return $this->render('article_admin/index.html.twig', [
            'controller_name' => 'ArticleAdminController',
        ]);
    }

    /**
     * @Route("/article/admin/new")
     */

    public function new(EntityManagerInterface $em)
    {

        $article = new Article();
        $article->setTitle("This is a new article")
            ->setSlug("new-artile".rand(1,10))
            ->setContent("ala abala portocala")
            ->setPublishedAt(new \DateTime);
        $em->persist($article);
        $em->flush();

        return new Response("This is new article with Id: ".$article->getId());
    }
}
