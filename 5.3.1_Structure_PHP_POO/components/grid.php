<div <?php if ($page != "produits") :  ?> class="container-fluid bg-3 text-center" <?php
                                                                                else : ?> class="col-md-6 col-md-offset-3" <?php endif ?>;id="grid">
    <?php if ($page != "produits") :  ?><h3 class="margin">Where To Find Me?</h3><?php endif ?>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <?php if ($page != "produits") :  ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="
            <?php
                print constant("birds1url");
            ?>
            " class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
            <img src="
            <?php
                print constant("birds2url");
            ?>" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
            <img src="
            <?php
                print constant("birds3url");;
            ?>" class="img-responsive margin" style="width:100%" alt="Image">
        <?php else : ?>

            <img src="
            <?php
                print constant("birds1url");
                ?>
            " class="img-responsive margin" style="width:100%" alt="Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
        </div>
        <div class="col-sm-4">

            <img src="
            <?php
                print constant("birds2url");
                ?>" class="img-responsive margin" style="width:100%" alt="Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
        </div>
        <div class="col-sm-4">
            <img src="
            
            <?php
                print constant("birds3url");
                ?>" class="img-responsive margin" style="width:100%" alt="Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
        <?php endif ?>
        </div>
    </div>
</div>