<?php 
    include('../../vendor/autoload.php');

    $post = Gjun\Blog\Controller\Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3><?php echo $post['title'];?></h3>
            <div class="mb-3">
                <?php echo $post['email']; ?>
            </div>
            <div class="mb-3">
                分類:<b><?php echo $post['category_title']; ?></b>
            </div>
            <div class="mb-3">
                <?php echo $post['body'];?>
            </div>
            <hr>
            <div>
                最後更新時間 <?php echo $post['updated_at']; ?>
            </div>
            <a href="../index.php" class="btn btn-dark">文章列表</a>
            <?php if($post['user_id'] == $_SESSION['AUTH']['id']){ ?>
            <a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-success">編輯文章</a>
            <form action="delete.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                <input type="submit" class="btn btn-danger" value="刪除文章" onclick="return confirm('確認刪除？')">
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>