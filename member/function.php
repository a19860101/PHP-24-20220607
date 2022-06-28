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
    function auth($request){
        session_start();
        extract($request);
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        
        if(!$user){
            echo '<script>alert("Email不存在，請重新登入或註冊")</script>';
            header('refresh:0;url=index.php');
            return ;
        }

        if(password_verify($pw,$user['pw'])){
            $_SESSION['AUTH'] = $user;
            echo '<script>alert("登入成功")</script>';
            header('refresh:0;url=index.php');
        }else{
            echo '<script>alert("帳號或密碼錯誤")</script>';
            header('refresh:0;url=login.php');
        }
    }
    function index(){
        $sql = 'SELECT * FROM users';
        $result = pdo()->query($sql)->fetchAll();
        return $result;
    }
    function changeRole($request){
        extract($request);
        $sql = 'UPDATE users SET role=? WHERE id=?';
        $stmt = pdo()->prepare($sql);
        $role = $role == 0 ? 1 : 0;
        $stmt->execute([$role,$id]);
    }