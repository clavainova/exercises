<?php
//titre
$titre = "Pierre, Paul et Jacquot";

//functions & classes
define("functions", "functions/");
define("classes", "classes/");

//parent
define("assets", "assets/");
define("config", "components/");
define("image", assets . "img/");

//layouts
define("layouts", "layouts/");
define("aboutinner", config . layouts . "about.php");

//general components
define("footer", config . "footer.html");
define("grid", config . "grid.php");
define("head", config . "head.php");
define("nav", config . "nav.php");

//index -- subcomponents
define("index", "index/");
define("indexfirstcontainer", config . index . "firstcontainer.php");
define("indexsecondcontainer", config . index . "secondcontainer.php");

//about -- subcomponents
define("about", "about/");
define("aboutfirstcontainer", config . about . "firstcontainer.php");
define("aboutsecondcontainer", config . about . "secondcontainer.php");

//contact -- subcomponents
define("contact", "contact/");
define("contactfirstcontainer", config . contact . "firstcontainer.php");

//blog - subcomponents
define("blog", "blog/");
define("blogarticle", config . blog . "article.php");

//images
$birdurl = image . 'bird.jpg';
$birds1url =  image . 'birds1.jpg';
$birds2url =  image . 'birds2.jpg';
$birds3url =  image . 'birds3.jpg';

//stylesheet
$cssurl = assets . 'style.css';
