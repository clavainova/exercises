<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use Doctrine\ORM\EntityManager;
//use App\

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index()
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController'
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add()
    {
        $cat = new Categorie();
        $cat->setName("Epicerie");
        //dd($cat);

        $em = $this->getDoctrine()->getManager();
        $em->persist($cat);
        $em->flush();

        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController'
        ]);
    }

    /**
     * @Route("/show", name="show")
     */
    /*
    public function show(CategorieRepository $catrep)
    {
        $cats = $catrep->findAll();
        dd($cats);

        return $this->render('category/index.html.twig', [
            'cats' => $cats
        ]);
    }
    */
}
