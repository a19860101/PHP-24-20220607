<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('template/bootstrap.php'); ?>
</head>
<body>
    <?php include('template/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>會員登入</h2>
                <form action="auth.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">密碼</label>
                        <input type="password" name="pw" class="form-control">
                    </div>
                    <input type="submit" value="登入" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    
    
    <?php 
        // if(isset($_GET['error'])){ 
        //     echo '<div class="alert bg-danger mx-3 fixed-bottom">';
        //     switch($_GET['error']){
        //         case 1:
        //             echo '請填入帳號或密碼';
        //             break;
        //         case 2:
        //             echo '帳號已被使用';
        //             break;
        //     }
        //     echo '</div>'; 
        // }   
    ?>
    
</body>
</html>