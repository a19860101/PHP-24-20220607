<?php
    // 變數
    /* 
        變數命名規範
        1. 只可使用英文開頭
        2. 符號只可使用底線
        3. 不可使用保留字
    */
    $x = 100;
    // echo $x;

    // 常數
    define('USER','john');
    define('PASSWORD','8888');
    // echo PASSWORD;

    // echo 只可輸出基本資料型態

    /* 
        基本資料型態
        1. 字串 string
        2. 整數 integer
        3. 浮點數 float
        4. 布林值 boolean(true,false)
    */

    // $a = true;
    // echo $a;
    // print_r($a);
    // var_dump($a);
    
    $name = 'John';
    $s1 = '<h1>HELLO $name </h1>';
    $s2 = "<h1>HELLO {$name} </h1>";

    // echo $s1;
    echo $s2;
