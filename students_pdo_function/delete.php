<?php
    include('db.php');
    extract($_REQUEST);


    $sql = 'DELETE FROM students WHERE id = ?';
    try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    header('location:index.php');