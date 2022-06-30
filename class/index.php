<?php
    class Role {
        // 屬性
        public $name = 'John Doe';
        public $gender;
    }

    $john = new Role; // 建立實體(物件)
    $john->name = 'John';
    $john->gender = '男';

    var_dump($john);
    
    $may = new Role;
    $may -> name = 'May';
    $may -> gender = '女';
    var_dump($may);