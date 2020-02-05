<!DOCTYPE html>
<html lang="en">

<?php
//go router php

//alternative -- use associative array with same
//index as $_GET["page"] and check if it exists
//then display that for more efficiency 



include_once 'classes/Request.php';
include_once 'classes/Router.php';
$router = new Router(new Request);

$router->get('/', function () {
});

$router->get('/profile', function ($request) {
});

$router->post('/data', function ($request) {
    return json_encode($request->getBody());
});


//end router
require 'config.php';

$page = $_GET['page'];
//custom stuff inserted here
switch ($page) {
    case ("about"):
        $pageList[4]->buildPage();
        break;
    case ("blog"):
        $pageList[2]->buildPage();
        break;
    case ("contact"):
        $pageList[3]->buildPage();
        break;
    case ("index"):
        $pageList[0]->buildPage();
        break;
    case ("produits"):
        $pageList[1]->buildPage();
        break;
    default:
        $pageList[5]->buildPage();
        break;
}
?>

</html>