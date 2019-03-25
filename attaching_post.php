<?
    include './config.php';
    include './functions/functions.php';
    include './classs/querybuilder.php';
    $pdo = ConnectToDataBase(); // Get Connection to Data Base;
    $db = new QueryBuilder($pdo);
    //$db->addPost($table, $post_name, $post_description, $post_text, $author_id, $post_image);
    var_dump($_POST);
?>