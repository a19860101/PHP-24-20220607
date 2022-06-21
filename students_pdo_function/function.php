<?php
    include('db.php');
    function index(){
        $sql = 'SELECT * FROM students';
        // global $pdo;
        try {
            $datas = pdo()->query($sql)->fetchAll();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $datas;
    }
    function show($request){
        extract($request);
        $sql = "SELECT * FROM students WHERE id = ?";
        try{
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $data;
    }
    function store($request){
        extract($request);
        $skill = implode(',',$skill);

        $sql = 'INSERT INTO students(username,pw,birth,edu,gender,skill,content)VALUES(?,?,?,?,?,?,?)';
        
        try {
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$username,$pw,$birth,$edu,$gender,$skill,$content]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function edit($request){
        extract($request);
        $sql = "SELECT * FROM students WHERE id = ?";
        try{
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $data;
    }