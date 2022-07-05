<?php

    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Post {
        static function index(){
            $sql = 'SELECT * FROM posts';
            $data = DB::pdo()->query($sql)->fetchAll();
            return $data;
        }
    }