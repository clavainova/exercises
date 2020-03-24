<?php
include "../account_management/sessionstart.php"; //try to start sesison if not already running
require "../account_management/functions.php"; //functions

var_dump($_POST);
//for passing the query on failure
$str = "DELETE FROM `".$_POST["table"]."` WHERE ".$_POST["rowName"]."=".$_POST["rowValue"]." ;";
var_dump($str);

$pdo = getConnection();
$sql = "DELETE FROM `".$_POST['table']."` WHERE ".$_POST['rowName']."=:rowValue ;";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':rowValue', $_POST['rowValue'], PDO::PARAM_STR);       
try{
    $stmt->execute();
    $_SESSION["notif"] = $notif;
    session_write_close();
    redirect("http://localhost/progression/Dojos/4_PHP/index.php?page=adminpanel");
}catch(Exception $e){
    $_SESSION["customerror"] = $str . " failed because of " . $e;
    session_write_close();
    redirect("http://localhost/progression/Dojos/4_PHP/index.php?page=adminpanel");
}

