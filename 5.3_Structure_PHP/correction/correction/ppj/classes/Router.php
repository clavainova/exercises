<?php

namespace App;

class Router
{

    public function __construct(){
        
    }

    public function getControllerMethod()
    {
        $route = str_replace('/','',$_SERVER['PATH_INFO']);//récupère la partie de l'url située après index.php
        
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