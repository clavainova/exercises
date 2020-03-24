<section>

    <?php

    $pdo = getConnection();
    $articles = fetchData($pdo, "article");
    $users = fetchData($pdo, "user");
    
    foreach ($articles as $value) :
        print("<article class='blog'><h1>" . $value["article_title"] . "</h1>" .
            "<p>Published: " . $value["date_published"] . "</p>" .
            "<img class='artimg' src='" . ASSETS_PATH . "/img" . "/" . $value["article_image"] . "'>" .
            "<p>" . $value["article_text"] . "</p>"
            . "<h1>Comments:</h1>");
        $comments = fetchData($pdo, "comment");
        foreach ($comments as $item) {
            //if they match -- the comment is for this article
            if ($item["article_id"] == $value["article_id"]) {
                print("<div>
                <h3>" . $item["comment_title"] . "</h3>
                <h3>Posted: " . $item["comment_date"] . " by " . getElemById($users, $item["user_id"], "user") ."</h3>
                <p>" . $item["comment_text"] . "</p>                
                </div>");
            }
        }
        print("</article>");
    ?>
    <?php
    endforeach;
    ?>

</section>