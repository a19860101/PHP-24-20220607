<?php
    $webroot = 'http://localhost/php-24-20220607/blog/public';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="<?php echo $webroot; ?>" class="logo">Logo</a>
        <div>
            <a href="<?php echo $webroot; ?>/post/create.php">建立文章</a>
            <a href="<?php echo $webroot; ?>/category/index.php">分類管理</a>
        </div>
        <div>
            <a href="#">註冊</a>
            <a href="#">登入</a>
            <a href="#">登出</a>
        </div>
    </nav>