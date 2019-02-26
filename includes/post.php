<?
  include './config.php';
  $pdo = new PDO($MySQL_Path, $DataBaseLogin, $DataBasePass); // Connection to Data Base;
  $statement = $pdo -> query("SELECT * FROM posts"); // Selection all posts;
  $posts = $statement -> fetchall(PDO::FETCH_ASSOC); // Transforming posts to array;
  
  // 'post_name'
  // 'post_description'
  // 'post_text'
  // 'author_id'
  // 'post_image'

  //var_dump($posts);
?>
<?foreach($posts as $post):?>
  <div class="col-md-2">
    <div class="card" style="width: 18rem;">
      <img src="<?=$DefaultImage;?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$PostName = $post['post_name'];?></h5>
        <p class="card-text"><?=$PostDescription = $post['post_description'];?></p>
        <button type="button" class="btn btn-primary btn-sm">New</button>
        <button type="button" class="btn btn-success btn-sm">Read</button>
        <button type="button" class="btn btn-warning btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Delete</button>
      </div>
    </div>
  </div>
<?endforeach;?>



