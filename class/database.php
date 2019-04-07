<?
    abstract class DataBase{
        protected $db_host;
        protected $db_login;
        protected $db_password;
        protected $db_table;
        protected $pdo;

        protected function __construct($host, $login, $password){
            include 'config.php'; // Connection to config file;
            $this->db_host=$host;
            $this->db_login=$login;
            $this->db_password=$password;
            $this->db_tables=$table;
        }

        public function ConectionToDB(){
            $db_host=$this->db_host;
            $db_login=$this->db_login;
            $db_password=$this->db_password;
            $pdo = new PDO($db_host, $db_login, $db_password); // Connection to Data Base;
            return $pdo;
        }
    }
    
    class WorkingWithDataBase extends DataBase{
        
        // Receiving all posts from Database as array;
        public function GetAllPosts($table){
            $statement = $this->pdo->query("SELECT * FROM {$table}"); // Selection all posts;
            $result = $statement -> fetchall(PDO::FETCH_ASSOC); // Transforming posts to array;
            return $result;
        }

        // Attaching new post to Database;
        public function AddNewPost($table, $post_name, $post_description, $post_text, $author_id, $post_image){
            $statement = $this->pdo->query("INSERT INTO {$table} (post_id, post_name, post_description, post_text, author_id, post_image) VALUES (NULL, '$post_name', '$post_description', '$post_text', '$author_id', '$post_image')");
        }

    }
?>