<?
  include './config.php';
  include './functions/functions.php';
  include './classs/querybuilder.php';
  include './classs/database.php';

  $pdo = ConnectToDataBase(); // Get Connection to Data Base;
  $dataBase = new QueryBuilder($pdo);
  $posts = $dataBase->GetAll('posts');
?>
<?foreach($posts as $post):?>
 <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="<?=$DefaultImage;?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$PostName = $post['post_name'];?></h5>
        <p class="card-text"><?=$PostDescription = $post['post_description'];?></p>
        <button type="button" class="btn btn-primary btn-sm" onclick="document.location='create.php'">New</button>
        <button type="button" class="btn btn-success btn-sm">Read</button>
        <button type="button" class="btn btn-warning btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Delete</button>
      </div>
    </div>
  </div>
<?endforeach;?>