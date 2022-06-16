<?php
    include('db.php');
    extract($_REQUEST);
    
    if(!isset($skill)){
        $skill = '';
    }else{
        $skill = implode(',',$skill);
    }

    $sql = "UPDATE students SET
            username = '$username',
            pw = '$pw',
            birth = '$birth',
            edu = '$edu',
            gender = '$gender',
            skill = '$skill',
            content = '$content'
            WHERE id = {$id}
    ";

    mysqli_query($db, $sql);

    header('location:index.php');