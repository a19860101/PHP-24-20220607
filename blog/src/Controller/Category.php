<?php
    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

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
      
        static function store($request){
            extract($request);
            $sql = '
                INSERT INTO categories(title,slug,created_at,updated_at)
                VALUES(?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title,$slug,DB::now(),DB::now()]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM categories WHERE id = ?';
            $stmt =DB::pdo()->prepare($sql);
            $stmt->execute([$id]);

        }
    }