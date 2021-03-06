<?php

namespace App\Controller;

use App\Entity\Pin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('pin/index.html.twig', [
            'controller_name' => 'PinController',
        ]);
        
        /*return new Response("Hello World I'm here");*/
        // return $this->json(['message' => 'Hello World']);
    }
}
