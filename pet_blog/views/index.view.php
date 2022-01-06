<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION['loggedUser'])) : ?>
            <li class="nav-item">
                <a href="add_post.php" class="nav-link">Add Post</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="index.php" class="btn btn-warning"><?php echo $_SESSION['loggedUser']->name; ?></a>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a href="login_register.php" class="nav-link">Login/Register</a>
            </li>
        <?php endif; ?>
    </ul>

</nav>
<div class="jumbotron text-center">
    <h4>Pets Blogger Posts</h4>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($posts as $post) : ?>
            <div class="col-6">

                <div class="card mb-3">
                    <div class="card-header">
                        <h5><?php echo $post->title; ?><small class="float-right">
                                <?php if (isset($_SESSION['loggedUser']) && $post->user_id == $_SESSION['loggedUser']->id) : ?>
                                    <a href="index.php?post_id=<?php echo $post->id; ?>" class="btn btn-sm btn-danger">Remove</a>
                                    <a href="index.php?post_id=<?php echo $post->id; ?>&action=update&title=<?php echo $post->title ?>&description=<?php echo $post->description ?>" class="btn btn-sm btn-warning">Update</a>

                                <?php endif; ?>
                            </small></h3>
                    </div>
                    <div class="card-body">
                        <p><?php echo $post->description; ?></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm float-right"><?php $date = date_create($post->created_at);
                                                                        echo date_format($date, "Y-m-d"); ?>
                        </button>
                        <button class="btn btn-warning btn-sm float-left">
                            <?php echo $user->getUserWithId($post->user_id)->name; ?>
                        </button>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once 'partials/bottom.php'; ?>