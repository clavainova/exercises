<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'World',
            'prenom' => "universe"
        ]);
    }
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('main/accueil.html.twig', [
            'titre' => 'Accueil',
            "style" => "/assets/css/accueil.css"
        ]);
    }
    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('main/blog.html.twig', [
            'titre' => 'Blog'
        ]);
    }
}
