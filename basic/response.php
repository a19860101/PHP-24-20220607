<?php
    // print_r($_POST);
    // echo $_POST['username'];
    // echo '<br>';
    // echo $_POST['pw'];
    // echo '<br>';
    // echo $_POST['birth'];
    // echo '<br>';
    // echo $_POST['gender'];
    // echo '<br>';
    // echo $_POST['edu'];
    // echo '<br>';
    // echo implode(',',$_POST['skill']);
    // echo '<br>';
    // echo $_POST['content'];
    // echo '<br>';

    // extract($_POST);
    // extract($_GET);

    function check($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    extract($_REQUEST);
   
    echo check($username);
    echo '<br>';
    echo $pw;
    echo '<br>';
    echo $birth;
    echo '<br>';
    echo $gender;
    echo '<br>';
    echo $edu;
    echo '<br>';
    echo implode(',',$skill);
    echo '<br>';
    echo $content;
    echo '<br>';