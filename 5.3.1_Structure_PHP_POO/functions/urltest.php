<?php
//directory
define("directory", "a");

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

//files
define("footer", [directory, components, "footer.html"]);
define("grid", [directory, components, "grid.php"]);
define("head", [directory, components, "head.php"]);
define("nav", [directory, components, "nav.php"]);
define("404", [directory, components, "404.php"]);
define("cssurl", [directory, assets, 'style.css']);
define("pageClass", [directory, classes, "page.php"]);
define("includePage", [directory, functions, "includePage.php"]);

//level 3
define("birdurl", [directory, assets, image, 'bird.jpg']);
define("birds1url", [directory, assets, image, 'birds1.jpg']);
define("birds2url", [directory, assets, image, 'birds2.jpg']);
define("birds3url", [directory, assets, image, 'birds3.jpg']);
define("indexfirstcontainer", [directory, components, index, "firstcontainer.php"]);
define("indexsecondcontainer",  [directory, components, index, "secondcontainer.php"]);
define("aboutfirstcontainer", [directory, components, about, "firstcontainer.php"]);
define("aboutsecondcontainer", [directory, components, about, "secondcontainer.php"]);
define("contactfirstcontainer", [directory, components, contact, "firstcontainer.php"]);
define("blogarticle", [directory, components, blog, "article.php"]);


//pageroot
define("pageroot", "http://localhost/progression/5.3_Structure_PHP/index.php?page=");
