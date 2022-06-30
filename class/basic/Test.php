<?php
    include('Role.php');
    class Test extends Role{
        function run(){
            echo $this->level;
        }
    }


    $alen = new Test;
    
    $alen->name = 'alen';
    // $alen->mail = 'asdf@gmail.com';
    // $alen->run();
    // var_dump($alen);

    echo $alen->name;

    /* 
        private 只可用在自己的類別，無法在實體中使用
        protected 只可用再類別內，無法在實體中使用
    
    */