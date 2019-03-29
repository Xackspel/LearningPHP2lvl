<?
    class QueryBuilder{
        protected $pdo;

        public function __construct($pdo){
            $this->pdo=$pdo;
        }

        /** Get all from $table = table name in data base and return them as associated array **/
        public function GetAll($table){
            $statement = $this->pdo->query("SELECT * FROM {$table}"); // Selection all posts;
            $result = $statement -> fetchall(PDO::FETCH_ASSOC); // Transforming posts to array;
            return $result; // Return array of posts;
        }

        /** Add new post to database **/
        function addPost($table, $post_name, $post_description, $post_text, $author_id, $post_image){
            $statement = $this->pdo->query("INSERT INTO {$table} (post_id, post_name, post_description, post_text, author_id, post_image) VALUES (NULL, '$post_name', '$post_description', '$post_text', '$author_id', '$post_image')"); // Selection all posts;
            //header('Location:index.php'); // Once all details been sent, move user to main page;
        }
    }
?>