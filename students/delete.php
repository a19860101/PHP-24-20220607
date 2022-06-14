<?php
    include('db.php');
    extract($_REQUEST);

    $sql = "DELETE FROM students WHERE id = {$id}";
    mysqli_query($db,$sql);

    header('location:index.php');