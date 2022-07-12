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
<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $webroot; ?>">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo $webroot; ?>">文章列表</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $webroot; ?>/post/create.php" class="nav-link">建立文章</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $webroot; ?>/category/index.php" class="nav-link">分類管理</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?php echo $webroot; ?>/user/register.php" class="nav-link">註冊</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">登入</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
