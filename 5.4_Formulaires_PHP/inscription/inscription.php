<?php
include "sessionstart.php";
include "utilisateur.php";
//for email sending
require_once 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//check user and pass are set
if ((!isset($_POST["username"]) || $_POST["username"] == "") || (!isset($_POST["pass"]) || $_POST["pass"] == "")) {
    //if nothing entered or fields incomplete, redirect back to the login page
    print("nothing entered/fields incomplete");
} else {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["pass"] = $_POST["pass"];
    $thisUser = new Utilisateur($_SESSION["username"], $_SESSION["pass"]);
    print ("session variables set. <br><b>user:</b> ") . $_SESSION["username"] . "<br><b>pass:</b> " . $_SESSION["pass"] . "<br>";
    //now we know that they exist, check if valid
    if ($thisUser->isEmailValid() && $thisUser->isPassValid()) {
        print("validated<br>");
        //if valid establish connection to db
        $conn = getConnection();
        if (checkUnique($conn, $thisUser)) {
            print("email unique");
            if ($thisUser->addDb($conn)) {
                print("success, finished");
                //now send them an email
                sendEmail($thisUser);
            } else {
                print("failed to push to database");
            }
        } else {
            print("email taken");
        }
    } else {
        print("validation failed");
        //if validation fails, return to login page
        // - display message here?
    }
}
redirect();

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
        print(json_encode(array('outcome' => true)) . "<br>");
    } catch (PDOException $ex) {
        //die if connection fails
        die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
    }
    return $conn;
}

function checkUnique($pdo, $thisUser)
{
    $stmt = $pdo->prepare("SELECT * FROM `utilisateurs`");
    $stmt->execute();
    //fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //without argument in brackets, returns parent table
    //var_dump($results);
    foreach ($results as $value) {
        if ($value["username"] == $thisUser->getEmail()) {
            return false;
        }
    }
    return true;
}

//in function so it's easier to disable for testing
function redirect()
{
    //header("Location: index.php");
}

function sendEmail($thisUser)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "clavainova@gmail.com";
    $mail->Password   = "";

    $mail->IsHTML(true);
    $mail->AddAddress($thisUser->getEmail(), "recipient-name");
    $mail->SetFrom("clavainova@gmail.com", "from-name");
    // $mail->AddReplyTo("clavainova@gmail.com", "reply-to-name");
    // $mail->AddCC("clavainova@gmail.com", "cc-recipient-name");
    $mail->Subject = "Confirmation for your account";
    $content = "Dear customer,<br><br>Thank you for registering with 5.4_Formulaires_PHP with the following personal data.<br>Email: " . $thisUser->getEmail() . "<br>Password: " . $thisUser->getPassword();
    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
    } else {
        echo "Email sent successfully";
    }
}
