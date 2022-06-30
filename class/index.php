<?php
    include('Post.php');
    include('User.php');

    use App\User;
    use App\Config\Post;


    echo User::index();
    echo Post::index();

    echo App\Config\Post::index();

    // echo App\User\User::index();
    // echo App\Post\Post::index();