<?php
    if(isset($_POST['del'])){
        // echo $_POST['img'];
        unlink($_POST['img']);
    }
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
    <div>
        <a href="form.php">上傳檔案</a>
    </div>
    <?php
        $imgs = glob('images/*');
        // print_r($imgs);
        $img_num = count($imgs);
    ?>
    <div>目前共有<?php echo $img_num;?>張圖片</div>
    <?php
        foreach($imgs as $img){
    ?>
    <div>
        
        <img src="<?php echo $img;?> " width="100">
        <form action="" method="post">
            <input type="hidden" name="img" value="<?php echo $img;?>">
            <input type="submit" value="刪除圖片" name="del" onclick="return confirm('確認刪除?')">
        </form>
    </div>
    <?php } ?>
</body>
</html>