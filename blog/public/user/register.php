<?php include('../template/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>註冊會員</h2>
            <form action="store.php" method="post">
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
<?php include('../template/footer.php');?>