<!DOCTYPE html>
<html lang="en">

<?php
require 'config.php';

include constant("head");
include constant("nav");

$page = $_GET['page'];
//custom stuff inserted here
switch ($page) {
    case ("about"):
        //GO FROM HERE
        // include constant("aboutfirstcontainer");
        // include constant("aboutsecondcontainer");
        // include constant("grid");            
        $pageList[4]->buildPage();

        break;
    case ("blog"):
        include constant("blogarticle");
        include constant("blogarticle");
        include constant("blogarticle");
        break;
    case ("contact"):
        include constant("contactfirstcontainer");
        break;
    case ("index"):
        include constant("indexfirstcontainer");
        include constant("indexsecondcontainer");
        include constant("grid");
        break;
    case ("produits"):
        include constant("grid");
        include constant("grid");
        include constant("grid");
        break;
    default: ?>
        <div class="container-fluid bg-1">
            <h1>404 Page Not Found</h1>
        </div>
<?php
        break;
}
?>

</html>