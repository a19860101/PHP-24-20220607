<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'adin';
    $db_name = 'php-24-20220607';
    $db_charset = 'utf8mb4';

    mysqli_report(MYSQLI_REPORT_OFF);

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    //data source network

    $pdo = new PDO($dsn, $db_user,$db_pw);