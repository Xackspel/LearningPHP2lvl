<?
    class QueryBuilder{
        protected $pdo;
        
        public function __construct($pdo){
            $this->pdo=$pdo;
        }

        /** Get all posts and put them as associated array **/
        public function GetAll($table){
            $statement = $this->pdo->query("SELECT * FROM {$table}"); // Selection all posts;
            $result = $statement -> fetchall(PDO::FETCH_ASSOC); // Transforming posts to array;
            return $result; // Return array of posts;
        }
    }
?>