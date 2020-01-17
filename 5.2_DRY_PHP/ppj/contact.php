<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Simply Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        <?php include 'components/style.css'
        ?>
    </style>
</head>

<body>

    <?php
    include 'components/nav.html';
    ?>

    <!-- First Container -->
    <div class="container-fluid bg-1">
        <h3 class="margin text-center">Contactez-nous</h3>
        <form class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Prénom</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre Email">
            </div>
            <div class="form-group">
                <label for="comment">Message</label>
                <textarea class="form-control" rows="5" id="message" placeholder="Votre message"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
    </div>

    <?php
    include 'components/footer.html';
    ?>

</body>

</html>