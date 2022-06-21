<?php
    include('db.php');
    extract($_REQUEST);
    
    if(!isset($skill)){
        $skill = '';
    }else{
        $skill = implode(',',$skill);
    }

    $sql = 'UPDATE students SET username=?,pw=?,birth=?,gender=?,edu=?,skill=?,content=? WHERE id =?';
    try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username,$pw,$birth,$gender,$edu,$skill,$content,$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    header('location:index.php');