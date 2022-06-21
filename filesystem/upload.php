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

    $img_name = md5(time());
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $fullname = $img_name.'.'.$ext;

    $folder = 'images/';
    $target = $folder.$fullname;
    if(!is_dir($folder)){
        mkdir($folder);
    }
    if($error == 0){
        move_uploaded_file($tmp_name,$target);
    }

    header('location:form.php');