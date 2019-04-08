<?
    include 'config.php';
    include './class/querybuilder.php';
    include './class/database.php';
    include './class/connection.php';


    $pdo = Connection::Make($MySQL_Path, $DataBaseLogin, $DataBasePass); # Connect to data base;
    $dataBase = new QueryBuilder($pdo); // Creation new query to data base;
    var_dump($dataBase);
    $sendingPostToDB = $dataBase->addPost('posts', $_POST); // Attaching new post to data base;
