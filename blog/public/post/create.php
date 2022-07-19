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
            <form action="store.php" method="post" enctype="multipart/form-data">
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
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>
                
                <input type="submit" value="建立文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>


<?php include('../template/footer.php'); ?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        language: 'zh_TW',
        height: 600,
        menubar: 'file edit view insert format tools table help',
        plugins:'image',
        toolbar: 'image',
        images_upload_base_path: 'postAcceptor.php',
        image_title: false,
        file_picker_types: 'image',
        image_uploadtab: false,
        automatic_uploads: true,
        file_picker_callback: (cb, value, meta) => {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];
            
                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    /*
                    Note: Now we need to register the blob in TinyMCEs image blob
                    registry. In the next release this part hopefully won't be
                    necessary, as we are looking to handle it internally.
                    */
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), { title: file.name });
                });
                reader.readAsDataURL(file);
                console.log(file.name);
            });

            input.click();
        },
    });
</script>

