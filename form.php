<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 表單都是使用post方法傳遞，除了搜尋 -->
    <form action="response.php" method="post">
        <div>
            <label for="">使用者名稱</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pw">
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>