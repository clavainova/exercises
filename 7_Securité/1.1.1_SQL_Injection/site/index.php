<?php include "config/config.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Sécurité - Injection SQL et Code</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" class="navbar-brand" href="index.html">
                    <img src="./assets/img/logo.jpg" alt="logo" class="img-circle" ></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="index.php?page=contact.php">Contact</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://owasp.org/www-project-top-ten/OWASP_Top_Ten_2017/Top_10-2017_Top_10.html">OWASP Top10</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu central -->
    <?php    
        if( isset($_GET['page']) ) {
            $page = $_GET['page'];
            include $page;

        } else {
            include 'articles.php';
        }
    ?>

    <!-- Footer -->
    <footer class="container-fluid padding footer text-center">
        <p>Sécurisation des sites Web - SIMPLON<br/>
            <a href="https://www2.owasp.org/www-project-top-ten/OWASP_Top_Ten_2017/Top_10-2017_Top_10.html">OWASP Top 10 Application Security Risks - 2017</a>
        </p>
    </footer>

</body>

</html>