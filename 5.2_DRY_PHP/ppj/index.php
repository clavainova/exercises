<!DOCTYPE html>
<html lang="en">

<?php include 'components/head.html'
?>

<body>

    <?php
    include 'components/nav.html';
    ?>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Qui sommes-nous ?</h3>
        <img src="images/bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>I'm an adventurer</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">Notre expertise</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <a href="#" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-search"></span> Search
        </a>
    </div>

    <?php
    include 'components/grid.html';
    include 'components/footer.html';
    ?>

</body>

</html>