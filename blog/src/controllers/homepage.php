<?php

require_once('src/lib/database.php');
require_once('src/model/post.php');

function homepage()
{
    $postRepository = new PostRepository();
    $posts = $postRepository->getPosts();

    require('templates/homepage.php');
}
