<?php
    include('db.php');
    function store($request){
        extract($request);
        if($email == '' || $pw == ''){
            return 1;
        }
        if(checkMail($email) != 0){
            return 2;
        }
        $sql = 'INSERT INTO users(email,pw,created_at)VALUES(?,?,?)';
        $stmt = pdo()->prepare($sql);
        $pw = password_hash($pw,PASSWORD_DEFAULT);
        $stmt->execute([$email,$pw,now()]);
        return 0;
    }
    function checkMail($email){
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount() > 0 ? 1 : 0;
        // 條件 ? 成立的動作:不成立的動作
        // if($stmt->rowCount() > 0){
        //     return 1;
        // }else{
        //     return 0;
        // }
    }