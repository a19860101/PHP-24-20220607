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
                <h2>註冊會員</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">密碼</label>
                        <input type="password" name="pw" class="form-control">
                    </div>
                    <input type="submit" value="註冊" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>