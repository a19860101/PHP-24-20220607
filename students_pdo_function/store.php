<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);

    $sql = 'INSERT INTO students(username,pw,birth,edu,gender,skill,content)VALUES(?,?,?,?,?,?,?)';
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username,$pw,$birth,$edu,$gender,$skill,$content]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

	header('location:index.php');