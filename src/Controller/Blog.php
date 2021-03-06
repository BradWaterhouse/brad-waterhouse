<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

final class Blog extends AbstractController
{
    /**
     * @Route("/blog", name="blog", methods={"GET"})
     */
    public function blog():Response
    {
        return $this->render('Pages/blog.html.twig');
    }

    /**
     * @Route("/blog/test", name="blog_post", methods={"GET"})
     */
    public function post(): Response
    {
        return $this->render('Pages/blog_post.html.twig');
    }
}
