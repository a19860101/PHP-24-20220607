<?php
    include('db.php');
    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(email,pw,created_at)VALUES(?,?,?)';
        $stmt = pdo()->prepare($sql);
        $pw = password_hash($pw,PASSWORD_DEFAULT);
        $stmt->execute([$email,$pw,now()]);
    }