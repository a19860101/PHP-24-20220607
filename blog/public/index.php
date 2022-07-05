<?php 
    include('../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $posts = Post::index();
    
?>
<?php include('template/header.php');?>
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
<?php include('template/footer.php');?>