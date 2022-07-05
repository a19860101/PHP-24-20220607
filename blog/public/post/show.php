<?php 
    include('../../vendor/autoload.php');

    $post = Gjun\Blog\Controller\Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3><?php echo $post['title'];?></h3>
            <div>
                <?php echo $post['body'];?>
            </div>
            <div>
                最後更新時間 <?php echo $post['updated_at']; ?>
            </div>
            <a href="#" class="btn btn-dark" onclick="history.back()">回上頁</a>
            <a href="#" class="btn btn-success">編輯文章</a>
            <a href="#" class="btn btn-danger">刪除文章</a>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>