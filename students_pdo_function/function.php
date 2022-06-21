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