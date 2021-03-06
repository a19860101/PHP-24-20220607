<?php
    if(!session_id()){
        session_start();
    }
?>
<nav class="navbar navbar-expand-lg bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['AUTH']) && $_SESSION['AUTH']['role'] == 0){ ?>
                <li class="nav-item">
                    <a href="member-list.php" class="nav-link">會員列表</a>
                </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a  class="nav-link" href="#"><?php echo $_SESSION['AUTH']['email']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">登出</a>
                </li>
                <?php } ?>
                <?php if(!isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">註冊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">登入</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
