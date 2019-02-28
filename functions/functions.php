<?
    /** Get connection to DB and return as variable **/
    function ConnectToDataBase(){
        include './config.php';
        $pdo = new PDO($MySQL_Path, $DataBaseLogin, $DataBasePass); // Connection to Data Base;
        return $pdo;
    }
    
?>