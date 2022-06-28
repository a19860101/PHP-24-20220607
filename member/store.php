<?php
    include('function.php');
    $result = store($_REQUEST);
    if($result == 1){
        header('location:register.php?error=1');
        return;
    }

    header('location:index.php');