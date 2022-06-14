<?php
    include('db.php');
    $sql = 'SELECT * FROM students';
    $result = mysqli_query($db,$sql);
    // $data = mysqli_fetch_assoc($result);
    $datas = mysqli_fetch_all($result,MYSQLI_ASSOC);

    var_dump($datas);
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
    
</body>
</html>