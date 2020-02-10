
<div class="container-fluid bg-1">
    <h3 class="margin text-center">Contactez-nous</h3>
    <form class="col-md-6 col-md-offset-3" method="post" action="<?= BASEREF ?>/contact">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" placeholder="Votre prénom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Votre Email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" rows="5" name="message" placeholder="Votre message" required></textarea>
        </div>
        <button type="submit" class="btn btn-default" name="envoyer">Envoyer</button>
    </form>
</div>

<?php
if(isset($_POST["envoyer"])) {
    $nom = $_POST["nom"];
    $msg = $_POST["message"];
    echo "<p class='message'>Merci ", $nom, ", votre message est envoyé.</p>";
}
?>

