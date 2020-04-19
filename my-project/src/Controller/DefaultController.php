<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default/{name}/", name="default")
     */
    public function index($name)
    {
        return $this->redirectToRoute('welcome');
    }

    /**
     * @Route("/welcome/", name="welcome")
     */
    public function index2()
    {
        
        return new Response('Welcome ');
    }
}
