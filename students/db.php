<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-24-20220607';

    mysqli_report(MYSQLI_REPORT_OFF);

    // Procedural
    $db = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('database error');

    mysqli_query($db,'SET NAMES utf8mb4');

    //Object-oriented

    // $db = @new mysqli($db_host,$db_user,$db_pw,$db_name);

    // if($db->connect_errno){
    //     echo $db->connect_error;
    // }

    // $db->query('SET NAMES utf8mb4');