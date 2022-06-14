<?php
    $x = 0;
   
    //if

    // if($x > 0){
    //     echo 'Success';
    // }

    // if...else

    // if($x > 0){
    //     echo 'Success';
    // }else{
    //     echo 'Error';
    // }

    // if...elseif

    // if($x > 0){
    //     echo '正';
    // }else if($x < 0){
    //     echo '負';
    // }

    //if...elseif...else

    // if($x > 0){
    //     echo '正';
    // }else if($x < 0){
    //     echo '負';
    // }else{
    //     echo 'Error';
    // }

    // switch
    switch($x){
        case 0:
            echo 0;
            break;
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        case 3:
            echo 3;
            break;
        default:
            echo 'Error';
    }

    switch(true){
        case $x > 0:
            echo '正';
            break;
        case $x < 0:
            echo '負';
            break;
        default:
            echo 'Error';
    }   