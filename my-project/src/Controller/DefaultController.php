<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/users/", name="get_users")
     */
    public function get_users(){
        $users = ['pop', 'thor', 'under', 'lif'];

        return $this->render(
            'default/index.html.twig',
            ['users' => $users]
        );
    }  
}
