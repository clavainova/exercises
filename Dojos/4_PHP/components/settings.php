<?php
//verify that account is logged in and that the user's data matches the database
//if not, redirect to login page 

if (verifyLogin()) :
?>
    <a href="http://localhost/progression/Dojos/4_PHP/account_management/logout.php">
        <h2>LOGOUT</h2>
    </a>

    <article class="three-col">
        <a href="">
            <div class="highlightbox-margin">
                <h1>Settings</h1>
                <p>Change your personal data.</p>
            </div>
        </a>
        <a href="">
            <div class="highlightbox-margin">
                <h1>Comments</h1>
                <p>View your comments</p>
            </div>
        </a>

        <?php
        $user = getCurrentUser();

        //view replies if not admin, if admin see panel
        if($user->__get("type") !== "admin"):
        ?>

        <a href="">
            <div class="highlightbox-margin">
                <h1>Replies</h1>
                <p>View replies to your comments</p>
            </div>
        </a>
        <?php
        else:
            ?>
        <a href="http://localhost/progression/Dojos/4_PHP/index.php?page=adminpanel">
            <div class="highlightbox-margin" style="background: yellow;">
                <h1>Admin panel</h1>
                <p>CRUD the database</p>
            </div>
        </a>
            <?php
        endif;
        ?>
    </article>
<?php
else :

    //include the forms
    include "login.php";
endif;
?>