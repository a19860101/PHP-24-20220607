<?php
    namespace Gjun\Blog\Controller;

    class Category {
        static function index(){
            $sql = 'SELECT * FROM categories';
            $data = DB::pdo()->query($sql)->fetchAll();
            return $data;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM categories WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
        static function edit($request){
            extract($request);
            $sql = 'SELECT * FROM categories WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
        static function update($request){
            extract($request);
            $sql = 'UPDATE categories SET title=?,body=?,category_id=?,updated_at=? WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title,$body,$category_id,DB::now(),$id]);
        }
        static function store($request){
            extract($request);
            $sql = '
                INSERT INTO categories(title,body,category_id,user_id,created_at,updated_at)
                VALUES(?,?,?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $user_id = 1;
            $stmt->execute([$title,$body,$category_id,$user_id,DB::now(),DB::now()]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM categories WHERE id = ?';
            $stmt =DB::pdo()->prepare($sql);
            $stmt->execute([$id]);

        }
    }