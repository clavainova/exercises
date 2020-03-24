<?php
//only admin can access, anyone else instantly redirected
    if(!verifyLogin()){
        redirect("http://localhost/progression/Dojos/4_PHP/index.php?page=settings");
    }
    $user = getCurrentUser();
    if($user->__get("type") !== "admin")
    {
        redirect("http://localhost/progression/Dojos/4_PHP/index.php?page=settings");
    }
?>

<section class="secart">
    <h1 class="center">CRUD Access</h1>

    <?php
    build("article", [
        "article_id",
        "article_title",
        "article_text",
        "article_image",
        "date_published",
        "publication_status",
        "category_id"
    ]);
    build("category", [
        "category_id",
        "category_name"
    ]);
    build("comment", [
        "comment_id",
        "comment_title",
        "comment_text",
        "comment_date",
        "article_id",
        "user_id"
    ]);
    build("user", [
        "user_id",
        "user_name",
        "user_email",
        "user_password",
        "user_type"
    ]);
    ?>
</section>

<?php

function build($table, $cols)
{
    //start building the html table
    print("<article style='center' id='" . $table . "'>
    <table>
    <tr>");
    foreach ($cols as $col) {
        print("<th>" . $col . "</th>");
    }
    print("<th>DELETE</th><th>EDIT</th></tr>");

    //fetch the data
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM " . $table);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //show the data
    foreach ($results as $item) {
        print("<tr>");
        foreach ($item as $td) {
            print("<td>" . $td . "</td>");
        }
        print("<td>🗑️</td><td>🖊</td>");
        print("</tr>");
    }
    print("</table>
    INSERT 🆕</article>");
}
?>