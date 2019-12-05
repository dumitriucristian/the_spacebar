<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('OMG! My fisrt page alread');
    }


    /**
     * @route("/news/{slug}")
     */
    public function show($slug)
    {

        return new Response('Future page to show: ' .$slug);

    }

}