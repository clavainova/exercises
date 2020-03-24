<?php

define('ROOT', str_replace('/index.php', '', $_SERVER["SCRIPT_NAME"]));

define('ASSETS_PATH', ROOT . "/assets");

define('STYLESHEET_DIR_PATH', ASSETS_PATH . "/css");

define('IMAGES_PATH', ASSETS_PATH . "/img");

//define("SCRIPTS_PATH",ASSETS_PATH."/js");

define('TITLE', 'Rhuma Sug');

define('COMPONENTS', "components");

define('ROUTES', include 'config/routes.php');


//error codes - the text in the array is displayed to the user upon an error
define('ERRORS', array(
    //100-110 -> login and registration errors
    "101" => "One or more fields incomplete (code:101)", //this one's applicable in a lot of situations
    "102" => "Account with that email does not exist (code:102)",
    "103" => "Incorrect password (code:103)",
    "104" => "Mismatched tokens - passwords or emails don't match (code:104)",
    "105" => "Name contains illegal characters (code:105)",
    "107" => "Password too weak (code:107)",
    "108" => "Email invalid (code:108)",
    "109" => "Email or username already in use (code:109)",
    "110" => "Did not agree to terms and conditions (code:110)",
    //200-210 -> internal errors (database connection, email sending)
    "200" => "Internal error: connection with database failed (code:200)",
    "201" => "Internal error: failed to write to database (code:201)",
    "202" => "Internal error: failed to send email (code:202)",
    "203" => "Internal error: partial login - failed to find current user - try logging in again (code:203)",
    //300 -> user trying to alter url to inject into database
    "300" => "Records in the URL did not match the database (code:300)",
));