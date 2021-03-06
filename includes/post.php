<?
  include './class/querybuilder.php';
  include './class/database.php';
  include './class/connection.php';

  $dataBase = new QueryBuilder(Connection::Make($MySQL_Path, $DataBaseLogin, $DataBasePass));
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