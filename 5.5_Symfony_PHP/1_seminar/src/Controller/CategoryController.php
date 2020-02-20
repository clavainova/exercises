<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
//use Doctrine\ORM\EntityManager;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Validator\Validator\ValidatorInterface;
// use Doctrine\ORM\EntityRepository;

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
        /*
        $cat = new Categorie();
        $cat->setName("Epicerie");
        //dd($cat);

        $em = $this->getDoctrine()->getManager();
        $em->persist($cat);
        $em->flush();
        */

        return $this->render('category/index.html.twig');
    }
    /**
     * @Route("/show", name="show")
     */

    public function show(CategorieRepository $catrep)
    {
        $cats = $catrep->findAll();
        dump($cats);

        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'cats' => $cats
        ]);
    }
}
