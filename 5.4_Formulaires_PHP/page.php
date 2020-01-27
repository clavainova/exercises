login successful!<br>
user: <?php print($_SESSION['username']); ?><br>
pass: <?php print($_SESSION['pass']); ?>

<form action="logout.php" method="post">
    logout : <input type="submit" />
</form>