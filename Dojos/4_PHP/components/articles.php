<article>
    <?php
    $pdo = getConnection();
    $articles = fetchData($pdo, "article");
    foreach ($articles as $value) :
        //print each here
    ?>
    <?php
    endforeach;
    ?>
</article>