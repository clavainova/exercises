<?php
//nb: made file paths absolute

//parent
define("directory", "");
//alternatives : 
///var/www/html/progression/5.3_Structure_PHP/
//$_SERVER['DOCUMENT_ROOT']
define("assets", directory . "assets/");
define("components", directory . "components/");
define("functions", directory . "functions/");
define("classes", directory .  "classes/");

//directories
define("image", assets . "img/");
define("layouts", components . "layouts/");
define("index", components . "index/");
define("about", components . "about/");
define("contact", components . "contact/");
define("blog", components . "blog/");

//general components
define("footer", components . "footer.html");
define("grid", components . "grid.php");
define("head", components . "head.php");
define("nav", components . "nav.php");

//ressources
$titre = "Pierre, Paul et Jacquot";
$birdurl = image . 'bird.jpg';
$birds1url =  image . 'birds1.jpg';
$birds2url =  image . 'birds2.jpg';
$birds3url =  image . 'birds3.jpg';
$cssurl = assets . 'style.css';

//layouts
define("aboutinner", layouts . "about.php");
define("bloginner", layouts . "blog.php");
define("contactinner", layouts . "contact.php");
define("produitsinner", layouts . "produits.php");
define("indexinner", layouts . "index.php");

//subcomponents
define("indexfirstcontainer", index . "firstcontainer.php");
define("indexsecondcontainer", index . "secondcontainer.php");
define("aboutfirstcontainer", about . "firstcontainer.php");
define("aboutsecondcontainer", about . "secondcontainer.php");
define("contactfirstcontainer", contact . "firstcontainer.php");
define("blogarticle", blog . "article.php");

//functions and classes
define("pageClass", classes . "page.php");
define("includePage", functions . "includePage.php");

//pageroute
define("pageroot", "http://localhost/progression/5.3_Structure_PHP/index.php?page=");

//pagelist
$pageData = array(
    array(
        "id" => "0",
        "value" => "index",
        "name" => "Accueil",
        "path" => pageroot . "index",
        "layout" => aboutinner,
        "components" => array(head, nav, indexfirstcontainer, indexsecondcontainer, grid, footer)
    ),
    array(
        "id" => "1",
        "value" => "produits",
        "name" => "Nos produits",
        "path" => pageroot . "produits",
        "layout" => produitsinner,
        "components" => array(head, nav, grid, grid, grid, footer)
    ),
    array(
        "id" => "2",
        "value" => "blog",
        "name" => "Blog",
        "path" => pageroot . "blog",
        "layout" => bloginner,
        "components" => array(head, nav, blogarticle, blogarticle, blogarticle, footer)
    ),
    array(
        "id" => "3",
        "value" => "contact",
        "name" => "Contact",
        "path" => pageroot . "contact",
        "layout" => contactinner,
        "components" => array(head, nav, contactfirstcontainer, footer)
    ),
    array(
        "id" => "4",
        "value" => "about",
        "name" => "A propos",
        "path" => pageroot . "about",
        "layout" => aboutinner,
        "components" => array(head, nav, aboutfirstcontainer, aboutsecondcontainer, grid, footer)
    )
);
//var_dump($pageData);


//make the pages objects and store in constant array
$pageList = array();
//load the class
require constant("pageClass");
//store each array thingy in an object
for ($i = 0; $i < count($pageData); $i++) {
    $thisId = $pageData[$i]["id"];
    $thisValue = $pageData[$i]["value"];
    $thisName = $pageData[$i]["name"];
    $thisPath = $pageData[$i]["path"];
    $thisLayout = $pageData[$i]["layout"];
    $thisComponents = $pageData[$i]["components"];
    $page = new Page($thisId, $thisValue, $thisName, $thisPath, $thisLayout, $thisComponents);
    array_push($pageList, $page);
}

//var_dump($pageList);
