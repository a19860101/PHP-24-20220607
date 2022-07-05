<?php
    include('../../vendor/autoload.php'); 

    Gjun\Blog\Controller\Post::update($_REQUEST);

    echo "<script>alert('文章已儲存!');</script>";
    header('refresh:0;url=show.php?id='.$_REQUEST['id']);