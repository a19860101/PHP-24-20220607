<?php

    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Post {
        static function index(){
            $sql = 'SELECT * FROM posts';
            $data = DB::pdo()->query($sql)->fetchAll();
            return $data;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
        static function edit($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
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
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt =DB::pdo()->prepare($sql);
            $stmt->execute([$id]);

        }
    }