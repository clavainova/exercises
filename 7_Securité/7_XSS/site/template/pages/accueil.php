<!-- Présentation -->
<div class="container-fluid bg-1 text-center">
    <h3>Site sensible aux attaques !</h3>
    <p>
        Ce site est sensible aux attaques malveillantes les plus connues et référencées dans le top 10 OWASP.<br/>
        Un gros travail vous attend pour contrer ces failles et sécuriser ce code. Bon courage !
    </p>
</div>

<!-- Formulaire de recherche -->
<div class="container-fluid bg-2 text-center">
    <form class="form-inline" method="post" action="#">
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
        $bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8;', BDD_USER, BDD_PWD,  );

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
                   <a href="<?= BASEREF ?>/article/<?= $row["id"] ?>"><h4><?= $row["titre"] ?></h4></a>
                    <p><?= $row["resume"] ?></p>
                    <img src="<?= IMAGES_PATH."/".$row["id"] ?>.jpg" class="img-responsive margin" style="width:100%" alt="Image">
                </div>
            <?php endforeach; ?>
        <?php }  ?>
    </div>
</div>

<!-- Language -->   
<div class="container-fluid bg-1 text-center">
    <h3>Choisissez une langue :</h3>
    <form method="GET" action="<?= BASEREF ?>">
        <div class="lang">
            <select name="lang" class="form-control">
                <script>                   
                    if (document.location.href.indexOf("lang=") >= 0) {                        
                        let lang = document.location.href.substring(document.location.href.indexOf("lang=")+5);
                        document.write("<option value='"+lang+"'>"+decodeURI(lang)+"</option>");
                        document.write("<option value='' disabled>----</option>");
                    }					    
                    document.write("<option value='English'>English</option>");
                    document.write("<option value='French'>French</option>");
                    document.write("<option value='Spanish'>Spanish</option>");
                    document.write("<option value='German'>German</option>");
                </script>
            </select>
            <input type="submit" value="Ok" class="btn btn-default btn-sm" style="min-width:60px; margin-left:5px;" />
        </div>
    </form>
</div>