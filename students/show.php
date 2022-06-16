<?php
    include('db.php');
    extract($_REQUEST);
    $sql = "SELECT * FROM students WHERE id = {$id}";
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_assoc($result);
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
    <h2><?php echo $data['username'];?> 個人資料</h2>
    <ul>
        <li>密碼:<?php echo $data['pw'];?></li>
        <li>生日:<?php echo $data['birth'];?></li>
        <li>性別:<?php echo $data['gender'];?></li>
        <li>學歷:<?php echo $data['edu'];?></li>
        <li>專長:<?php echo $data['skill'];?></li>
        <li>內容:<?php echo $data['content'];?></li>
    </ul>
    <a href="index.php">回上頁</a>
    <a href="edit.php?id=<?php echo $data['id'];?>">編輯</a>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
    </form>
</body>
</html>