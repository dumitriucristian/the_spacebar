<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Michelf\MarkdownInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use App\Entity\Article;

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
    public function show($slug, MarkdownInterface $markdown, EntityManagerInterface $em)
    {

        $repository = $em->getRepository(Article::class);

        /** @var  Article $article */
        $article = $repository->findBy(["slug" => $slug ]);
        if (!$article) {
            throw $this->createNotFoundException("THis article do not exist");
        }


        $comments =[
            "I do agree ",
            "I am against that idea",
            "For me it's no interest"
        ];


        return $this->render('article/show.html.twig', [

            'article' => $article,
            'comments' => $comments,

        ]);
    }

    /**
     * @route("/news/{slug}/heart", name="article_toggle_heart", methods="POST")
     */
    public function toggleArticleHeart(Article $article, LoggerInterface $logger, EntityManagerInterface $em)
    {

       $article->setHeartCount($article->getHeartCount() + 1 );
       $em->flush();

        $logger->info('Article is being hearted');
        return new JsonResponse(['hearts'=>$article->getHeartCount()] );
    }



}