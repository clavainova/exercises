<!DOCTYPE html>
<html lang="fr">
    <?php
        //la balise head
        include_once TEMPLATE_PARTS.'/header.php';
    ?>
<body>
    <?php
        //la balise nav
        include_once TEMPLATE_PARTS.'/nav.php';

        //le corps de la page
        if(isset($_GET['page'])){
            
            if( array_key_exists($_GET['page'],ROUTES) && file_exists(TEMPLATE_PAGES."/".ROUTES[$_GET['page']]) )
            {
                include TEMPLATE_PAGES."/".ROUTES[$_GET['page']];
            }
            else{
                header('Location:index.php?page=page_404');
            }
        }
     
        //la balise footer
        include_once TEMPLATE_PARTS.'/footer.php';
    ?>
</body>
</html>