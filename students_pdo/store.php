<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);

    $sql = 'INSERT INTO students(username,pw,birth,edu,gender,skill,content)VALUES(?,?,?,?,?,?,?)';
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$username,$pw,$birth,$edu,$gender,$skill,$content]);

	header('location:index.php');