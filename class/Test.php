<?php
    include('Role.php');
    class Test extends Role{

    }


    $alen = new Test;
    $alen->name = 'alen';
    $alen->mail = 'asdf@gmail.com';
    var_dump($alen);