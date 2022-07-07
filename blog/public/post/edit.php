<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    use Gjun\Blog\Controller\Category;
    $categories = Category::index();
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
                    <label for="">文章分類</label>
                    <select name="category_id" id="" class="form-select">
                        <?php foreach($categories as $category){ ?>
                            <option 
                                value="<?php echo $category['id']; ?>"
                                <?php echo $post['category_id'] == $category['id'] ? 'selected':'' ;?>
                                >
                                <?php echo $category['title']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內文</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"><?php echo $post['body'];?></textarea>
                </div>
                
                <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                <input type="submit" value="更新文章" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-secondary" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>