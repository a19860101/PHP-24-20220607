<?php
    include('db.php');
    function store($request){
        extract($request);
        if($email == '' || $pw == ''){
            return 1;
        }
        $sql = 'INSERT INTO users(email,pw,created_at)VALUES(?,?,?)';
        $stmt = pdo()->prepare($sql);
        $pw = password_hash($pw,PASSWORD_DEFAULT);
        $stmt->execute([$email,$pw,now()]);
        return 0;
    }