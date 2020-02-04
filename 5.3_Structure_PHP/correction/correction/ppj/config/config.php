<?php

define('ROOT',str_replace('/index.php','',$_SERVER["SCRIPT_NAME"]));

define('ASSETS_PATH',ROOT."/assets");

define('STYLESHEET_DIR_PATH',ASSETS_PATH."/css");

define('IMAGES_PATH',ASSETS_PATH."/images");

define("SCRIPTS_PATH",ASSETS_PATH."/js");

define('TITLE','Pierre, Paul et Jacquot');

define('TEMPLATE',"template");

define('TEMPLATE_PARTS',TEMPLATE.'/template-parts');

define('TEMPLATE_PAGES',TEMPLATE.'/pages');

define('ROUTES',include 'config/routes.php');

define('DATAS_PATH','datas');

?>