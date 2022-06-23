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
        foreach($imgs as $img){
    ?>
    <img src="<?php echo $img;?> " width="100">
    <?php } ?>
</body>
</html>