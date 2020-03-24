<header>PHP DOJO

    <?php
    if (verifyLogin()) {
        $user = getCurrentUser();
        print(": Welcome, " . $user->__get(("username")));
    }
    ?>

</header>