<?php
require_once 'bootstrap.php';

if (isset($_GET['post_id']) && isset($_GET['action'])) {

    $post = $post->findById('posts', $_GET['post_id']);
    require_once 'views/update.post.view.php';
    return;
}


if (isset($_GET['post_id']) && isset($_SESSION['loggedUser'])) {
    $post->deletePost($_GET['post_id']);
}


$posts = $post->selectAll('posts');


require_once 'views/index.view.php';
