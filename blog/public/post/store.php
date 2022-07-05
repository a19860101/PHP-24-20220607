<?php
    include('../../vendor/autoload.php');

    // use Gjun\Blog\Controller\Post;

    Gjun\Blog\Controller\Post::store($_REQUEST);

    header('location:../index.php');