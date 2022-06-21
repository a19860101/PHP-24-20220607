<?php
    // var_dump($_FILES);
    // $name = $_FILES['img']['name'];
    // $size = $_FILES['img']['size'];
    // $tmp_name = $_FILES['img']['tmp_name'];
    // $error = $_FILES['img']['error'];
    // $full_path = $_FILES['img']['full_path'];
    // $type = $_FILES['img']['type'];
    // echo $name;
    // echo '<br>';
    // echo $size;
    // echo '<br>';
    // echo $tmp_name;
    // echo '<br>';
    // echo $error;
    // echo '<br>';
    // echo $full_path;
    // echo '<br>';
    // echo $type;
    // echo '<br>';
    extract($_FILES['img']);

    $img_name = md5(time()); //建立亂數檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION); //取得副檔名
    $fullname = $img_name.'.'.$ext; //合併檔名+副檔名

    $folder = 'images/'; //上傳路徑
    $target = $folder.$fullname; // 目標路徑
    if(!is_dir($folder)){
        mkdir($folder);
        //若資料夾不存在就建立資料夾
    }
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo '<script>alert("上傳成功")</script>';
        }else{
            echo '<script>alert("上傳失敗")</script>';
        }
        
    }

    // header('location:form.php');
    header('Refresh:0;url=form.php');