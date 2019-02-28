<?
    class QueryBuilder{
        protected $pdo;
        
        public function __construct($pdo){
            $this->pdo=$pdo;
        }

        /** Get all posts and put them as associated array **/
        function GetAll(){
            $statement = $this->pdo->query("SELECT * FROM posts"); // Selection all posts;
            $posts = $statement -> fetchall(PDO::FETCH_ASSOC); // Transforming posts to array;
            return $posts; // Return array of posts;
        }
    }
?>