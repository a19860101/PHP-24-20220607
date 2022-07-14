<?php
    include('../../vendor/autoload.php'); 
    use Gjun\Blog\Controller\Category;
    use Gjun\Blog\Controller\Role;
    
    $role = new Role;
    $role->isUser();
    
    $categories = Category::index();
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>建立文章</h2>
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">文章分類</label>
                    <select name="category_id" id="" class="form-select">
                        <?php foreach($categories as $category){ ?>
                            <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內文</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                
                <input type="submit" value="建立文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>