<?php

//foreign key being created before both exist

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
//currently not implemented:
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;


class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index()
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add()
    {
        $prod = new Produit();
        //dd($cat);

        $em = $this->getDoctrine()->getManager();
        $em->persist($prod);
        //dd($em);
        $em->flush();

        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController'
        ]);
    }

    //update

    //delete

    /**
     * @Route("/show", name="show")
     */
    /*
    //not adapted for this instance
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
