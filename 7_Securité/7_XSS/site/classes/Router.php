<?php

namespace App;

class Router
{

    public function __construct(){
        
    }

    public function getControllerMethod()
    {
        $route = "";

        //cas particulier ?lang
        if(strripos($_SERVER['REQUEST_URI'], 'index.php?lang=') >0) return "accueil";

        //récupère la requete de l'URL
        $posIndex =strripos($_SERVER['REQUEST_URI'], 'index.php'); 
        if($posIndex>0) $route = substr($_SERVER['REQUEST_URI'], $posIndex+9);         
        // $route=trim($route); 

        //si / après index.php
        if( strpos($route, '/') == 0 )  $route=substr($route,1);     
        //cas spécifique si paramètres après le nom de la méthode
        if( strripos($route, '/') >1 ) $route=substr($route,0, strripos($route, '/'));        
        
        if(strlen($route)<1) $route = "accueil"; //page par défaut si vide
        //choix de la page dans le tableau associatif
        if(array_key_exists($route,ROUTES))
        {
            $method = ROUTES[$route];
        }else{
            $method = "page404";
        }
        return $method;
    }
}

?>