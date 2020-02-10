<!-- Présentation -->
<div class="container-fluid bg-1 text-center">
    <h3>A1. Injection</h3>
    <p>
        Cette page contient un formulaire de recherche d'articles, consistant en un simple <i>textbox</i> donnant accès à des requêtes en base de données.<br/>
        Voici donc un accès potentiellement non protégé permettant de <i>hacker</i> le site et pourquoi pas de récupérer des informations utilisateurs ...!
    </p>
</div>

<!-- Formulaire de recherche -->
<div class="container-fluid bg-2 text-center">
    <form class="form-inline" method="post" action="index.php">
        <div class="form-group">
            <label for="tbSearch">Rechercher des articles </label>
            <input type="text" class="form-control" id="tbSearch" name="tbSearch" placeholder="Renseignez le titre" >
        </div>
        <button type="submit" class="btn btn-default">Envoyer</button>
    </form>

</div>

<?php
    // variable contenant le texte à rechercher
    // si le formulaire de recherche est utilisé : on recup le texte du formulaire
    $txt = "";
    if (!empty($_POST)) {
        $txt = $_POST["tbSearch"];
    }

    // connexion à la base de données pour recup des articles de la base
    try {
        $bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8;', BDD_USER, BDD_PWD);

        //construction de la requête
        $sql = "select titre, resume, id from article ";
        if($txt != "") $sql .= "where titre like '".$txt."%' ";
        $sql .= "LIMIT 3 ";

        //execution et récup des résultats dans $rows
        $req = $bdd->query($sql);
        $rows = $req->fetchAll();
    } catch (Exception $e) {  }
?>

<?php
    //pour désactiver les erreurs envoyées à l'utilisateur !!
    error_reporting(-1);
    ini_set('display_errors', 0);
?>

<!-- Articles -->
<div class="container text-center">
    <br/>
    <h3>Derniers articles</h3>
    <br/>
    <div class="row">
    <?php if(count($rows)<1) { ?>
            <p>Aucun résultat ne correspond à votre recherche ...</p>
        <?php } else {  ?>
            <?php foreach($rows as $row): ?>
                <div class="col-sm-4">
                   <h4><?= $row["titre"] ?></h4>
                    <p><?= $row["resume"] ?></p>
                    <img src="./assets/img/<?= $row["id"] ?>.jpg" class="img-responsive margin" style="width:100%" alt="Image">
                </div>
            <?php endforeach; ?>
        <?php }  ?>
    </div>
</div>
