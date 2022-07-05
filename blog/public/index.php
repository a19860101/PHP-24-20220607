<?php 
    include('../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $posts = Post::index();
    
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
    <?php foreach($posts as $post){ ?>
        <div>
            <h2><?php echo $post['title'];?></h2>
            <div>
                <?php echo $post['body']; ?>
            </div>
            <div>
                最後更新時間:<?php echo $post['updated_at']; ?>
            </div>
        </div>
    <?php } ?>
</body>
</html>