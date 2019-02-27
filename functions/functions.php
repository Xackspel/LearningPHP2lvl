<?
    /** Get all posts and put them as associated array **/
    function GetAllPosts(){
        include './config.php';
        $pdo = new PDO($MySQL_Path, $DataBaseLogin, $DataBasePass); // Connection to Data Base;
        $statement = $pdo -> query("SELECT * FROM posts"); // Selection all posts;
        $posts = $statement -> fetchall(PDO::FETCH_ASSOC); // Transforming posts to array;
        return $posts; // Return array of posts;
    }
    


?>