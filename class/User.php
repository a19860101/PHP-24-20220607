<?php
    // 靜態方法: 方法中不能使用任何的this，並用static開頭
    class User {
        public $name = 'John Doe';

        // 靜態方法
        static function go(){
            return ' go';
        }

    }

    
    echo User::go();
