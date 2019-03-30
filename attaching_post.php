<?
    include './config.php';
    include './functions/functions.php';
    include './classs/querybuilder.php';
    include './classs/database.php';
    $pdo = ConnectToDataBase(); // Get Connection to Data Base;
  
    $dataBase = new QueryBuilder($pdo);
    $dataBase->addPost('posts', $_POST['post_name'], $_POST['post_description'], $_POST['post_text'], $_POST['author_id'], $_POST['post_image']);
    var_dump($_POST, $dataBase);
?>