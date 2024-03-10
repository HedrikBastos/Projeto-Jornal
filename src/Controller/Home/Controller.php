<?php

namespace App\Controller\Home;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Controller extends AbstractController
{
    #[Route('/home', name: 'home', methods:['GET'])]
    public function index(): Response
    {
     
        return $this->render('home/index.html.twig',[
  
        ]);
    }
}
