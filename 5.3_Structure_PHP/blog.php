<!DOCTYPE html>
<html lang="en">

<?php
require 'components/config.php';
$page = "blog";
include constant("head");
?>

<body>

    <?php
    include constant("nav");

    include constant("blogarticle");
    include constant("blogarticle");
    include constant("blogarticle");

    include constant("footer");
    ?>

</body>

</html>