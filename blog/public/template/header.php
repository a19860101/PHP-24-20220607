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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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