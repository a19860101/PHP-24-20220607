<?php
    session_start();
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
    <form action="create_session.php" method="post">
        <div>
            <label for="">title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">phone</label>
            <input type="text" name="phone">
        </div>
        <input type="submit" value="建立session">
    </form>
    <div>
        <?php 
            if(isset($_SESSION['DATA'])){
                // print_r($_SESSION['DATA']);
                extract($_SESSION['DATA']);
                echo $title;
                echo '<br>';
                echo $email;
                echo '<br>';
                echo $phone;

                // echo $_SESSION['DATA']['title'];
                // echo '<br>';
                // echo $_SESSION['DATA']['email'];
                // echo '<br>';
                // echo $_SESSION['DATA']['phone'];
            }else{
                echo 'session不存在或尚未啟動';
            }
        ?>
    </div>
</body>
</html>