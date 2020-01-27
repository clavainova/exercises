<!DOCTYPE html>
<html lang="en">

<head></head>

<body>
    <?php
    if (!isset($_SESSION["username"])) :
    ?>
        <form action="connexion.php" method="post">
            username - <input type="text" name="username"><br>
            password - <input type="text" name="pass"><br>
            <input type="submit" value="Submit">
        </form>
    <?php
    else :
        include "page.php";
    endif;
    ?>
</body>