<?

    include './class/querybuilder.php';
    include './class/database.php';
    include './class/connection.php';

    $pdo = Connection::Make();
    $dataBase = new QueryBuilder($pdo);
    $dataBase->addPost('posts', $_POST);
