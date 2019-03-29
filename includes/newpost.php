<body>
    <? require_once "navbar.php"; // Switch on navbar;?>
    <br>
    <div class="container">
        <div class="col">
        <form action="attaching_post.php" method="POST">
            <div class="form-group">
                <img src="<?=$DefaultImage;?>" alt="Please select image." name="post_image">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter post name" name="post_tname" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter post description" name="post_description" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post Text</label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter post text here" rows="10" name="post_text" required></textarea>
            </div>
            </div>
                <button type="submit" class="btn btn-primary">Create new post</button>
            </form>
        </div>
    </div>
</body>