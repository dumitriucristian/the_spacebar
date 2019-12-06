<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }


    /**
     * @route("/news/{slug}", name="article_show")
     */
    public function show($slug)
    {

        $comments =[
            "I do agree ",
            "I am against that idea",
            "For me it's no interest"
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
            'slug' => $slug
        ]);
    }

    /**
     * @route("/news/{slug}/heart", name="article_toggle_heart", methods="POST")
     */
    public function toggleArticleHeart($slug, LoggerInterface $logger)
    {
        //TODO - actually hear/unheart the article
        $logger->info('Article is being hearted');
        return new JsonResponse(['hearts'=> rand(5,100)]);
    }



}