<?php 
    include('../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $posts = Post::index();
    
?>
<?php include('template/header.php');?>
<div class="container">
    <div class="row gy-4">
        <?php foreach($posts as $post){ ?>
        <div class="col-12 rounded-3 p-4" style="background-color:#eee">
            <h2><?php echo $post['title'];?></h2>
            <div class="mb-3">
                分類:<b><?php echo $post['category_title']; ?></b>
            </div>
            <div>
                <?php echo $post['body']; ?>
            </div>
            <div>
                <a href="post/show.php?id=<?php echo $post['id'];?>">繼續閱讀</a>

            </div>
            <div>
                最後更新時間:<?php echo $post['updated_at']; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php include('template/footer.php');?>