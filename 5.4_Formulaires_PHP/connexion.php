<?php
include "sessionstart.php";

if (($_GET["username"] == null) || ($_GET["pass"] == null)) {
    echo "no password or no username entered<br>";
} else {
    $_SESSION["username"] = $_GET["username"];
    $_SESSION["pass"] = $_GET["pass"];
}


//header("Location: index.php");

?>
<script type="text/javascript">
window.location.href = "index.php";
</script>
