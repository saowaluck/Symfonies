<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Users;

class DefaultController extends AbstractController
{
    /**
     * @Route("/users/", name="get_users")
     */
    public function get_users(){
        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();

        return $this->render(
            'default/index.html.twig',
            ['users' => $users]
        );
    }  

    /**
     * @Route("/users/create/", name="create_users")
     */
    public function create_users(){
        $entityManager = $this->getDoctrine()->getManager();

        $user = new Users;
        $user->setName('Pop');
        $user->setAge(20);
        $entityManager->persist($user);

        $user1 = new Users;
        $user1->setName('thor');
        $user1->setAge(20);
        $entityManager->persist($user1);

        $entityManager->flush();
        
        return $this->redirectToRoute('get_users');

    }
}
