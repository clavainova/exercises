

<?php
    // connexion à la base de données pour recup des articles de la base
    try {
        $bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8;', BDD_USER, BDD_PWD);

        //construction de la requête
        $sql = "select titre, content from article where id = ".$id;

        //execution et récup des résultats dans $rows
        $req = $bdd->query($sql);
        $row = $req->fetch();
    } catch (Exception $e) {  }
?>

<!-- Article -->
<div class="container-fluid bg-1 text-center">
    <h3><?= $row["titre"] ?></h3>
</div>
<br/>
<div class="container text-center">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?= IMAGES_PATH."/".$id ?>.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-8">
            <p class="texte"><?= $row["content"] ?></p>
        </div>
    </div>
</div>

<!-- Ajout d'un nouveau commentaire ? -->
<?php
if(isset($_POST["envoyer"])) {
    $nom = $_POST["nom"];
    $msg = $_POST["message"]; 
    $nom = stripslashes($nom);
    $msg = stripslashes($msg);

    // connexion à la base de données pour recup des articles de la base
    try {
        $bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8;', BDD_USER, BDD_PWD);

        //construction de la requête
        $sql = "insert into comment (idArticle, nom, message) values($id, '$nom', '$msg')";

        //execution et récup des résultats dans $rows
        $req = $bdd->query($sql);
    } catch (Exception $e) { echo $e->getMessage(); }
}
?>

<!-- Liste des commentaires -->
<?php
try {
    $bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8;', BDD_USER, BDD_PWD);
    $sql = "select nom, message, DATE_FORMAT(dtcree,'%d/%m/%Y') as dtcree from comment where idArticle=$id";
    $req = $bdd->query($sql);
    $comms = $req->fetchAll();
} catch (Exception $e) {  }
if(count($comms)>0) { 
?>
<div class="container">
    <h3>Commentaires</h3>
    <?php foreach($comms as $comm): ?>
        <p class="comment"><?= $comm["message"] ?></p>
        <p class="auteur"><?= $comm["nom"] ?> - <?= $comm["dtcree"] ?></p>
    <?php endforeach; ?>
</div>
<?php } ?>
<br/>

<!-- Nouveau commentaire -->
<div class="container-fluid bg-2">
    <h3 class="text-center">Laissez un commentaire</h3>
    <form class="col-md-6 col-md-offset-3" method="post">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" rows="5" name="message" placeholder="Votre message" required maxlength="80" ></textarea>
        </div>
        <button type="submit" class="btn btn-default" name="envoyer">Envoyer</button>
        <br/><br/>
    </form>
</div>

<script>
    xhr = new XMLHttpRequest();
    xhr.open('GET', '');
    xhr.send();
</script>