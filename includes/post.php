<?
  include './config.php';
  include './functions/functions.php';
  include './classs/querybuilder.php';
  $pdo = ConnectToDataBase(); // Get Connection to Data Base;
  $db = new QueryBuilder($pdo);
  $posts = $db->GetAll();
  
  //$posts = GetAllPosts($pdo); // Showing all posts.

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