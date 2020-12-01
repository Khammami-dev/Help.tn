<?php

namespace App\Controller;

use App\Entity\RecObjetPerdu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        //$repository=$this->getDoctrine()->getRepository(RecObjetPerdu::class);
        //$objetsperdus = $repository->ObjetPerduPublique();

        return $this->render('front/index.html.twig', [
            'controller_name' => 'HomeController',

        ]);
    }
}
