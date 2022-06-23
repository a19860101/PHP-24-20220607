<?php
    session_start();
    $title = $_REQUEST['title'];
    $_SESSION['TITLE'] = $title;


    echo '<script>alert("session已建立")</script>';
    header('refresh:0;url=index.php');