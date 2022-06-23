<?php
    session_start();
    session_destroy();

    echo '<script>alert("session已刪除")</script>';
    header('refresh:0;url=index.php');