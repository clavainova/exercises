<?php
//check user and pass are set
if ((!isset($_POST["username"]) || $_POST["username"] == "") || (!isset($_POST["pass"]) || $_POST["pass"] == "")) {
    //if nothing entered or fields incomplete, redirect back to the login page
    print("nothing entered/fields incomplete");
    redirect();
} else {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["pass"] = $_POST["pass"];
    //now we know that they exist, check if valid
    if (validateEmail($_SESSION["username"]) && validatePassword($_SESSION["pass"])) {
        //if valid establish connection to db
        $conn = getConnection();
        //check if already exists in db
        //if not, display message and add to db
        //need to do this w/o possibility of injection
    } else {
        //if validation fails, return to login page
        // - display message here?
        redirect();
    }
}

function getConnection()
{
    //connect to server
    try {
        $conn = new PDO(
            "mysql:host=localhost;dbname=php_formulaires;port=3306",
            "clavain",
            "",
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        //check server connection, die if fails, return outcome: true if successful
        print(json_encode(array('outcome' => true)));
    } catch (PDOException $ex) {
        //die if connection fails
        die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
    }
    return $conn;
}

function validateEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function validatePassword($pass)
{
    // does string contain a capital and a special character w/ regular expressions
    // then check if it's the right length with strlen
    if ((preg_match('/[A-Z]/', $pass))
        && (preg_match('/[^a-zA-Z\d]/', $pass))
        && (strlen($pass) >= 6)
    ) {
        return true;
    }
    return false;
}


//in function so it's easier to disable for testing
function redirect()
{
    //header("Location: index.php");
}
