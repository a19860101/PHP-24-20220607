<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-24-20220607';
    $db_charset = 'utf8mb4';

    // mysqli_report(MYSQLI_REPORT_OFF);

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    //data source network

    try {
        $pdo = new PDO($dsn, $db_user,$db_pw);

        //不主動報錯(預設值)
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);

        //主動報錯
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        
        //主動例外
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



    }catch(PDOExceiption $e){
        echo $e->getMessage();
        // var_dump($e);
    }