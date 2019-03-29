<body>
    <? require_once "navbar.php"; // Switch on navbar;?>
    <br>
    <div class="container">
        <div class="col">
        <form action="attaching_post.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Post Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter post name" name="pos_tname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter post description" name="post_description">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post Text</label>
                <textarea name="Post_Text" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
            </div>
            </div>
                <button type="submit" class="btn btn-primary">Create new post</button>
            </form>
        </div>
    </div>
</body>