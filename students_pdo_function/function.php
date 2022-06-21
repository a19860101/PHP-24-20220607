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