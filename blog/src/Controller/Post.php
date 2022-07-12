<?php

    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Post {
        static function index(){
            $sql = 'SELECT posts.*,users.email,categories.title AS category_title 
                    FROM posts 
                    LEFT JOIN categories 
                    ON posts.category_id = categories.id
                    LEFT JOIN users
                    ON posts.user_id = users.id
                    ';
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
        static function update($request){
            extract($request);
            $sql = 'UPDATE posts SET title=?,body=?,category_id=?,updated_at=? WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title,$body,$category_id,DB::now(),$id]);
        }
        static function store($request){
            session_start();
            extract($request);
            $sql = '
                INSERT INTO posts(title,body,category_id,user_id,created_at,updated_at)
                VALUES(?,?,?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $user_id = $_SESSION['AUTH']['id'];
            $stmt->execute([$title,$body,$category_id,$user_id,DB::now(),DB::now()]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt =DB::pdo()->prepare($sql);
            $stmt->execute([$id]);

        }
    }