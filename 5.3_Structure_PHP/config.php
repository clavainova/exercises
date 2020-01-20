<?php
//nb: made file paths absolute

//parent
define("directory", "");
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

//subcomponents
define("indexfirstcontainer", index . "firstcontainer.php");
define("indexsecondcontainer", index . "secondcontainer.php");
define("aboutfirstcontainer", about . "firstcontainer.php");
define("aboutsecondcontainer", about . "secondcontainer.php");
define("contactfirstcontainer", contact . "firstcontainer.php");
define("blogarticle", blog . "article.php");
