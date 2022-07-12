<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\User;
    $result = User::auth($_REQUEST);

    echo $result;
    // switch($result){
    //     case 0:
    //         $msg = '<script>alert("登入成功!");</script>';
    //         $page = '../index.php';
    //         break;
    //     case 1:
    //         $msg = '<script>alert("Email不存在，請重新登入或註冊!");</script>';
    //         $page = 'register.php';
    //         break;
    //     case 2:
    //         $msg = '<script>alert("帳號或密碼錯誤!");</script>';
    //         $page = 'login.php';
    //         break;
    // }
    // echo $msg;
    switch($result){
        case 0:
            $msg = '登入成功!';
            $page = '../index.php';
            break;
        case 1:
            $msg = 'Email不存在，請重新登入或註冊!';
            $page = 'register.php';
            break;
        case 2:
            $msg = '帳號或密碼錯誤!';
            $page = 'login.php';
            break;
    }

    echo "<script>alert('{$msg}');</script>";
    header('refresh:0;url='.$page);