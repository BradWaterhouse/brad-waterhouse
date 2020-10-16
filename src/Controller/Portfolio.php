<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

final class Portfolio extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio", methods={"GET"})
     */
    public function blog():Response
    {
        return $this->render('Pages/portfolio.html.twig');
    }

}
