<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
        </li>
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
        </li>
    </ul>

</nav>

<div class="jumbotron text-center">
    <h4>Update Post</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <?php if (isset($post->updatePostStatus)) : ?>
                <div class="alert alert-success">Post Updated</div>
            <?php endif; ?>
            <form action="update_post.php" method="POST">
                <input type="text" name="post_title" value="<?php echo $_GET['title'] ?>" placeholder="title" class="form-control"><br>
                <textarea name="post_description" class="form-control" placeholder="description" cols="30" rows="10"><?php echo $_GET['description'] ?></textarea><br>
                <input type="hidden" name="post_id" value="<?php echo $post->id ?>">
                <button type="submit" name="update_sub_btn" class="form-control btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php'; ?>