<?php
class Auth {
    public static function check(){
        if(!isset($_SESSION['student_id'])){
            header('Location: /login');
            exit;
        }
    }
}

?>