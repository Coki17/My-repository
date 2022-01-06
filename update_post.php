<?php
require_once 'bootstrap.php';


if (isset($_POST['update_sub_btn'])) {
    $post->updatePost();
}

$posts = $post->selectAll('posts');
require_once 'views/index.view.php';
