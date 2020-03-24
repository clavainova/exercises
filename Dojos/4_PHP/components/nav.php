<nav>
  <ul>
    <li><a href="index.php?page=articles">Articles</a></li>
    <li><a href="index.php?page=settings">
        <?php
        if (verifyLogin()) {
          $user = getCurrentUser();
          print($user->__get(("username")));
        } else {
          print("Connexion");
        }
        ?>
      </a></li>

    <li><a href="">About</a></li>
    <li><a href="">Contact</a></li>
  </ul>
</nav>