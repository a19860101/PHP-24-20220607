<?php
    namespace Gjun\Blog\Controller;

    class Role {
        public $page403 = 'http://localhost/php-24-20220607/blog/public/template/403.php';
        function isUser(){
            if(!session_id()){
                session_start();
            }
            if(!isset($_SESSION['AUTH'])){
                header('location:'.$this->page403);
                return;
            }
        }
        function isAdmin(){
            if(!session_id()){
                session_start();
            }
            if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH']['role'] != 0){
                header('location:'.$this->page403);
                return;
            }
        }
        static function isGuest(){

        }
    }