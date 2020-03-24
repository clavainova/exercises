<?php

namespace App;

//route for each page

class Controller
{

    public function articles()
    {
        $this->render('articles.php');
    }

    public function settings()
    {
        $this->render('settings.php');
    }

    public function page404()
    {
        $this->render('page404.php');
    }

    public function adminpanel()
    {
        $this->render('adminpanel.php');
    }

    private function render($template, $params = null)
    {
        //transforme le tableau $params en variables portant le nom des clés du tableau
        //ces variables sont disponibles dans la vue
        if ($params != null) {
            extract($params);
        }

        include COMPONENTS . '/template.php';
    }
}
