<?php
    class Role {
        // 屬性
        private $name = 'John Doe';
        protected $level = 0;
        public $gender;

        // 方法
        public function walk(){
            // $this->name = 'Johnny';
            echo $this->name.'walk!!!';
            return 'walk!';
        }
    }

    $john = new Role; // 建立實體(物件)
    // $john->name = 'John';
    // $john->gender = '男';
    $john->walk();
    // var_dump($john);
    // 
    $may = new Role;
    // $may -> name = 'May';
    // $may -> gender = '女';
    // $may -> walk();
    // var_dump($may);