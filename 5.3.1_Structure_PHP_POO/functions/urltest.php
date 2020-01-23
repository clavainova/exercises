<?php

require "buildUrl.php";

//directory
define("directory", "");

//folders
define("assets", "assets/");
define("components", "components/");
define("functions", "functions/");
define("classes", "classes/");
define("image", "img/");
define("index", "index/");
define("about", "about/");
define("contact", "contact/");
define("blog", "blog/");

//files -- 2
define("footer", array(directory, components, "footer.html"));
define("grid", array(directory, components, "grid.php"));
define("head", array(directory, components, "head.php"));
define("nav", array(directory, components, "nav.php"));
define("404", array(directory, components, "404.php"));
define("cssurl", array(directory, assets, 'style.css'));
define("pageClass", array(directory, classes, "page.php"));
define("buildUrl", array(directory, functions, "buildUrl.php"));

//files -- 3
define("birdurl", array(directory, assets, image, 'bird.jpg'));
define("birds1url", array(directory, assets, image, 'birds1.jpg'));
define("birds2url", array(directory, assets, image, 'birds2.jpg'));
define("birds3url", array(directory, assets, image, 'birds3.jpg'));
define("indexfirstcontainer", array(directory, components, index, "firstcontainer.php"));
define("indexsecondcontainer",  array(directory, components, index, "secondcontainer.php"));
define("aboutfirstcontainer", array(directory, components, about, "firstcontainer.php"));
define("aboutsecondcontainer", array(directory, components, about, "secondcontainer.php"));
define("contactfirstcontainer", array(directory, components, contact, "firstcontainer.php"));
define("blogarticle", array(directory, components, blog, "article.php"));

//testing
echo buildUrl("cssurl")."<br>";
echo buildUrl("buildUrl")."<br>";
echo buildUrl("sqdsqd")."<br>";

//pageroot
define("pageroot", "http://localhost/progression/5.3_Structure_PHP/index.php?page=");
