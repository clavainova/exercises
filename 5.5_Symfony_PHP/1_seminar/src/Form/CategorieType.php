<?php

//need one of these for produit with forms like this:
/*
$builder
->add('price')
->add('name')
->add("categorie", EntityType::class,[
    "class" => Categorie::class,
    "choice_label"=> "name"]);
*/
//use datatypes for verification
//https://symfony.com/doc/current/reference/forms/types/entity.html

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
