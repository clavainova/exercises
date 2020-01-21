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
    default: ?>
        <div class="container-fluid bg-1">
            <h1>404 Page Not Found</h1>
        </div>
<?php
        break;
}
?>

</html>