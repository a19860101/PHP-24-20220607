<?php
    session_start();
    // $title = $_REQUEST['title'];
    // $_SESSION['TITLE'] = $title;

    $_SESSION['DATA'] = $_REQUEST;


    echo '<script>alert("session已建立")</script>';
    header('refresh:0;url=index.php');