<?php
    use src\core\Router;

    require_once __DIR__ . "/../vendor/autoload.php";

    $router = new Router();

    $router->get("/user" , function (){
        echo "hello from user";
    });

    $router->get("/login", function () {
        echo "hello from login page";
    });

    $router->get("/404", function () {
        echo "Error : 404";
    });

   
?>