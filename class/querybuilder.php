<?
    class QueryBuilder{
        public $pdo;

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
        public function addPost($table, $array){
            $post_name = $array['post_name'];
            $post_description = $array['post_description'];
            $post_text = $array['post_text'];
            $send_data = $this->pdo->query("INSERT INTO {$table} (post_id, post_name, post_description, post_text, author_id, post_image) VALUES (NULL, '$post_name', '$post_description', '$post_text', NULL, NULL)");
            return $send_data;
            //header('Location:index.php'); // Once all details been sent, move user to main page;
        }
    }
