<?php
    include('db.php');
    $sql = 'SELECT * FROM students';
    $result = mysqli_query($db,$sql);
    // $data = mysqli_fetch_assoc($result);
    $datas = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // print_r($datas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid #888;
            border-collapse: collapse;
        }
        td,th {
            padding: 15px;
        }
    </style>
</head>
<body>
    <a href="create.php">新增資料</a>
    <table>
        <tr>
            <th>#</th>
            <th>帳號</th>
            <th>密碼</th>
            <th>生日</th>
            <th>學歷</th>
            <th>性別</th>
            <th>專長</th>
            <th>內容</th>
            <th>動作</th>
        </tr>
        <?php foreach($datas as $data){ ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['pw']; ?></td>
                <td><?php echo $data['birth']; ?></td>
                <td><?php echo $data['edu']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['skill']; ?></td>
                <td><?php echo $data['content']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id'];?>">編輯</a>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
                    </form>
                </td>
            </tr>
        <?php } ?>


        <?php
            // foreach($datas as $data){
            //     echo '<tr>';
            //     echo "<td>{$data['id']}</td>";
            //     echo "<td>{$data['username']}</td>";
            //     echo "<td>{$data['pw']}</td>";
            //     echo "<td>{$data['birth']}</td>";
            //     echo "<td>{$data['edu']}</td>";
            //     echo "<td>{$data['gender']}</td>";
            //     echo "<td>{$data['skill']}</td>";
            //     echo "<td>{$data['content']}</td>";
            //     echo '</tr>';
            // }
        ?>
    </table>
</body>
</html>