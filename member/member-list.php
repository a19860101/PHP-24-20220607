<?php
    include('function.php');
    $users = index();
?>
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
            <div class="col-12">
                <h2>會員列表</h2>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>角色</th>
                        <th>動作</th>
                    </tr>
                    <?php foreach($users as $user){ ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <?php 
                                echo $user['role'] == 0 ? '管理員':'一般會員' ; 
                            ?>
                        </td>
                        <td>
                            <?php if($user['role']==0){ ?>
                                <a href="changeRole.php?role=<?php echo $user['role'];?>&id=<?php echo $user['id'];?>" class="btn btn-danger btn-sm">取消管理員</a>
                            <?php }else{ ?>
                                <a href="changeRole.php?role=<?php echo $user['role'];?>&id=<?php echo $user['id'];?>" class="btn btn-success btn-sm">設定管理員</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>