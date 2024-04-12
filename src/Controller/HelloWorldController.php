<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloWorldController extends AbstractController
{
    public function __construct(
        private Environment $twig,
    ) {
    }


    #[Route('/hello', name: 'hello_world')]
    public function index(): Response
    {
        $content = $this->twig->render('hello/index.html.twig', [
            'name' => 'World',
            'user' => new class {
                function isSubscribed()
                {
                    return false; 
                }
            },
        ]);
        return new Response($content);
    }
}
