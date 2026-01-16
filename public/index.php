<?php

    require_once __DIR__ . '/../app/core/Router.php';

    $router = new Router();

    $router->get('/', ['StudentController', 'index']);
    $router->get('/students', ['StudentController', 'students']);
    $router->get('/student/add', ['StudentController', 'addStudentForm']);
    $router->post('/students', ['StudentController', 'storeStudent']);
    $router->get('/student', ['StudentController', 'showStudent']);

    $router->dispatch($_SERVER['REQUEST_URI']);
?>