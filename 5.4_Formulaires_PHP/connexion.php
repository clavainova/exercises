<?php
include "sessionstart.php";

if (!isset($_POST["username"]) || !isset($_POST["pass"])) {
    echo "FAILURE no password or no username entered<br>";
} else {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["pass"] = $_POST["pass"];
    echo "success";
    $conn = getConnection();
    uploadUser($conn, $_SESSION["username"], $_SESSION["pass"]);
}

function getConnection()
{
    $servername = "localhost";
    $username = "clavain";
    $password = "";
    $database = "php_formulaires";
    //connect to server
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed \n -- "); // . $conn->connect_error
    } else {
        echo "connection successful \n -- ";
    }
    return $conn;
}

function uploadUser($conn, $user, $pass)
{
    if ($stmt = $conn->prepare('INSERT INTO utilisateurs (username,password) VALUES (?,?)')) {
        echo "preparing statement bind param \n -- ";
        $stmt->bind_param('ss', $user, $pass);
        echo " statements bound \n -- ";
        //sss", $nom, $email, $message);
        echo "executing statement \n -- ";
        $stmt->execute();
        echo "executed statement \n -- ";
        // sendEmail($email);
    } else {
        die("preparation failed \n -- " . htmlspecialchars($conn->error));
    }
}

//pure php alternative: header("Location: index.php");
?>
<script type="text/javascript">
    window.location.href = "index.php";
</script>