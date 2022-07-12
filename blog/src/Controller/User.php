<?php
    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;
    class User {
        static function store($request){
            extract($request);
            if($email == '' || $pw == ''){
                return 1;
            }
            if(User::checkMail($email) != 0){
                return 2;
            }
            $sql = 'INSERT INTO users(email,pw,created_at)VALUES(?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $pw = password_hash($pw,PASSWORD_DEFAULT);
            $stmt->execute([$email,$pw,DB::now()]);
            return 0;
        }
        static function checkMail($email){
            $sql = 'SELECT * FROM users WHERE email = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$email]);
    
            return $stmt->rowCount() > 0 ? 1 : 0;
        }
        static function auth($request){
            session_start();
            extract($request);
            $sql = 'SELECT * FROM users WHERE email = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$email]);
            $user = $stmt->fetch();
            
            if(!$user){
                // echo '<script>alert("Email不存在，請重新登入或註冊")</script>';
                // header('refresh:0;url=index.php');
                return  1;
            }
    
            if(password_verify($pw,$user['pw'])){
                $_SESSION['AUTH'] = $user;
            }else{
                // echo '<script>alert("帳號或密碼錯誤")</script>';
                // header('refresh:0;url=login.php');
                return 2;
            }
            return 0;
        }
        static function index(){
            $sql = 'SELECT * FROM users';
            $result = DB::pdo()->query($sql)->fetchAll();
            return $result;
        }
        static function changeRole($request){
            extract($request);
            $sql = 'UPDATE users SET role=? WHERE id=?';
            $stmt = DB::pdo()->prepare($sql);
            $role = $role == 0 ? 1 : 0;
            $stmt->execute([$role,$id]);
        }
        static function denied(){
            if(!session_id()){
                session_start();
            }
            if(!isset($_SESSION['AUTH'])){

                $page = 'http://localhost/php-24-20220607/blog/public/template/403.php';
                header('location:'.$page);
                return;
            }
            // if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH']['role'] != 0){
            //     header('location:index.php');
            //     return;
            // }
        }
    }