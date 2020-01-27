<!DOCTYPE html>
<html lang="en">

<head></head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"])) :
    ?>
        <form action="connexion.php" method="post">
            username - <input type="text" name="username" /><br>
            password - <input type="text" name="pass" /><br>
            <input type="submit" />
        </form>
    <?php
    else :
        include "page.php";
    endif;
    ?>
</body>