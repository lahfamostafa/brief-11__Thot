<?php

class Router {

    public function handleRequest(){
        $uri = trim($_SERVER['REQUEST_URI'], '/');

        if($uri === '' || $uri === '/'){
            require '../app/views/student/login.php';
        }
        elseif($uri === 'login'){
            require '../app/Controller/studentController.php';
            (new StudentContoller())->login();
        }
        elseif ($uri === 'register') {
            require '../app/Controller/studentController.php';
            (new StudentContoller())->register();
        }
        elseif($uri === 'student/dashboard'){
            Auth::check();
            require '../app/Controller/studentController.php';
            (new StudentContoller())->dashboard();
        }
    }
}

?>