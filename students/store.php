<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);

    $sql = "INSERT INTO students(username,pw,birth,edu,gender,skill,content)
            VALUES('$username','$pw','$birth','$edu','$gender','$skill','$content')";

    mysqli_query($db,$sql);

    header('location:index.php');