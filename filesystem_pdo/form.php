<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" name="title" placeholder="圖片名稱">
        </div>
        <div>
            <input type="file" name="img">
        </div>
        <input type="submit" value="上傳">
    </form>

</body>
</html>