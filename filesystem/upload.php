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

    //判斷圖片格式
    if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png'){
        echo '<script>alert("請上傳正確的圖片格式")</script>';
        header('refresh:0;url=form.php');
        return ;
        // 終止下面的動作
    }


    $folder = 'images/'; //上傳路徑
    $target = $folder.$fullname; // 目標路徑
    if(!is_dir($folder)){
        mkdir($folder);
        //若資料夾不存在就建立資料夾
    }
    switch($error){
        case 0:
            if(move_uploaded_file($tmp_name,$target)){
                echo '<script>alert("上傳成功")</script>';
            }else{
                echo '<script>alert("上傳失敗")</script>';
            }
            break;
        case 1:
            echo '上傳檔案過大(伺服器限制)';
            break;
        // 不會顯示出來 會直接報錯
        case 2:
            echo '上傳檔案過大(表單限制)';
            break;
        case 3:
            echo '只有部分上傳';
            break;
        case 4:
            echo '請選擇檔案';
            break;
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '無法寫入';
            break;
        case 8:
            echo '不支援檔案上傳';
            break;
        
    }

    // header('location:form.php');
    header('Refresh:0;url=index.php');