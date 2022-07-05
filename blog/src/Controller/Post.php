<?php

    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Post {
        static function index(){
            $sql = 'SELECT * FROM posts';
            $data = DB::pdo()->query($sql)->fetchAll();
            return $data;
        }
        static function store($request){
            extract($request);
            $sql = '
                INSERT INTO posts(title,body,category_id,user_id,created_at,updated_at)
                VALUES(?,?,?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $user_id = 1;
            $stmt->execute([$title,$body,$category_id,$user_id,DB::now(),DB::now()]);
        }
    }