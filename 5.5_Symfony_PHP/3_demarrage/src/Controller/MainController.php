<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('main/pages/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/produits", name="produits")
     */
    public function produits()
    {
        return $this->render('main/pages/produits.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('main/pages/blog.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('main/pages/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('main/pages/about.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
