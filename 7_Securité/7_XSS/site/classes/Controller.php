<?php

namespace App;

class Controller
{
    public function accueil($request)
    {
        $this->render('accueil.php',array("id"=>$request->getId()));
    }

    public function contact()
    {
        $this->render('contact.php');
    }

    public function article($request)
    {
        $this->render('article.php', ["id"=>$request->getId()]);
    }

    public function page404()
    {
        $this->render('page_404.php');
    }

    private function render($template,$params=null)
    {
        //transforme le tableau $params en variables portant le nom des clés du tableau
        //ces variables sont disponibles dans la vue
        if($params != null)
        {
            extract($params);
        }
        
        include TEMPLATE.'/base.php';
    }
}

?>