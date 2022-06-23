<?php
    session_start();
    $title = $_REQUEST['title'];
    $_SESSION['TITLE'] = $title;

    echo $_SESSION['TITLE'];