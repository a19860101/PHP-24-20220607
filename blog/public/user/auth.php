<?php
    include('../../vendor/autoload.php');

    Gjun\Blog\Controller\User::auth($_REQUEST);

    echo '<script>alert("登入成功!")</script>';

    header('refresh:0;url=../index.php');