<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);

//     $sql = "INSERT INTO students(username,pw,birth,edu,gender,skill,content)
//             VALUES('$username','$pw','$birth','$edu','$gender','$skill','$content')";
//     mysqli_query($db,$sql);

    $sql = 'INSERT INTO students(username,pw,birth,edu,gender,skill,content)VALUES(?,?,?,?,?,?,?)';
	$stmt = $db->prepare($sql);
	$stmt->bind_param('sssssss',$username,$pw,$birth,$edu,$gender,$skill,$content);
	$stmt->execute();

	header('location:index.php');