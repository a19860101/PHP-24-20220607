<?php
    include('db.php');
    $sql = 'SELECT * FROM galleries';
    $imgs = pdo()->query($sql)->fetchAll();

    if(isset($_POST['del'])){
        extract($_POST);
        unlink('images/'.$_POST['img']);
        $sql = 'DELETE FROM galleries WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        echo '<script>alert("圖片已刪除")</script>';
        header('refresh:0;url=index.php');
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
    <div>目前共有<?php echo count($imgs);?>張圖片</div>
    <?php
        foreach($imgs as $img){
    ?>
    <div>
        <figure>
            <img src="images/<?php echo $img['name'];?> " width="100">
            <figcaption><?php echo $img['title']; ?></figcaption>
        </figure>
        <form action="" method="post">
            <input type="hidden" name="img" value="<?php echo $img['name'];?>">
            <input type="hidden" name="id" value="<?php echo $img['id'];?>">
            <input type="submit" value="刪除圖片" name="del" onclick="return confirm('確認刪除?')">
        </form>
    </div>
    <?php } ?>
</body>
</html>