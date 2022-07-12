<?php include('../template/header.php'); ?>
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
<?php include('../template/footer.php'); ?>