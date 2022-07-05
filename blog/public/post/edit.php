<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $post = Post::edit($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>編輯文章</h2>
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">標題</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內文</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"><?php echo $post['body'];?></textarea>
                </div>
                <div class="mb-3">
                    <label for="">文章分類</label>
                    <select name="category_id" id="">
                        <option value="1" <?php echo $post['category_id'] == 1 ? 'selected':'' ;?>>科技</option>
                        <option value="2" <?php echo $post['category_id'] == 2 ? 'selected':'' ;?>>生活</option>
                        <option value="3" <?php echo $post['category_id'] == 3 ? 'selected':'' ;?>>健康</option>
                        <option value="4" <?php echo $post['category_id'] == 4 ? 'selected':'' ;?>>娛樂</option>
                    </select>
                </div>
                <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                <input type="submit" value="更新文章" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-secondary" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>