<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="index.php?page=index"><img src="
                <?php
                print $birdurl;
                ?>
                "  class="img-circle" alt="logo" width="50px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php?page=index">ACCUEIL</a>
                </li>
                <li>
                    <a href="index.php?page=produits">NOS PRODUITS</a>
                </li>
                <li>
                    <a href="index.php?page=blog">BLOG</a>
                </li>
                <li>
                    <a href="index.php?page=contact">CONTACT</a>
                </li>
                <li>
                    <a href="index.php?page=about">A propos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>