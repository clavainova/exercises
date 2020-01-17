<!DOCTYPE html>
<html lang="en">


<?php
require 'components/config.php';
$page = "about";
include constant("head");
?>

<body>

    <?php
    include constant("nav");
    include constant("aboutfirstcontainer");
    include constant("aboutsecondcontainer");
    include constant("grid");
    include constant("footer");
    ?>

</body>

</html>