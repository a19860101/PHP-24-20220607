<?php
    include('../../vendor/autoload.php');

    use Gjun\Blog\Controller\Category;

    Category::store($_REQUEST);

    echo "<script>alert('分類已建立')</script>";
    header('refresh:0;url=index.php');