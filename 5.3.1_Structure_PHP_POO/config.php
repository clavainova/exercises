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
define("index", components . "index/");
define("about", components . "about/");
define("contact", components . "contact/");
define("blog", components . "blog/");

//general components
define("footer", components . "footer.html");
define("grid", components . "grid.php");
define("head", components . "head.php");
define("nav", components . "nav.php");
define("404", components . "404.php");

//ressources
define("birdurl", image . 'bird.jpg');
define("birds1url",  image . 'birds1.jpg');
define("birds2url", image . 'birds2.jpg');
define("birds3url",  image . 'birds3.jpg');
define("cssurl", assets . 'style.css');

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
        "components" => array(head, nav, indexfirstcontainer, indexsecondcontainer, grid, footer)
    ),
    array(
        "id" => "1",
        "value" => "produits",
        "name" => "Nos produits",
        "path" => pageroot . "produits",
        "components" => array(head, nav, grid, grid, grid, footer)
    ),
    array(
        "id" => "2",
        "value" => "blog",
        "name" => "Blog",
        "path" => pageroot . "blog",
        "components" => array(head, nav, blogarticle, blogarticle, blogarticle, footer)
    ),
    array(
        "id" => "3",
        "value" => "contact",
        "name" => "Contact",
        "path" => pageroot . "contact",
        "components" => array(head, nav, contactfirstcontainer, footer)
    ),
    array(
        "id" => "4",
        "value" => "about",
        "name" => "A propos",
        "path" => pageroot . "about",
        "components" => array(head, nav, aboutfirstcontainer, aboutsecondcontainer, grid, footer)
    ),
    array(
        "id" => "5",
        "value" => "404",
        "name" => "404 Not Found",
        "path" => pageroot . "404",
        "components" => array(head, nav, 404, footer)
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
    $thisComponents = $pageData[$i]["components"];
    $page = new Page($thisId, $thisValue, $thisName, $thisPath, $thisComponents);
    array_push($pageList, $page);
}

//var_dump($pageList);


//gonna try making an associative array with all the file paths


