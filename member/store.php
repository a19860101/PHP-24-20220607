<?php
    include('function.php');
    $result = store($_REQUEST);
    if($result != 0){
        switch($result){
            case $result:
                header('location:register.php?error='.$result);
                return;
                break;
        }
    }

    header('location:index.php');