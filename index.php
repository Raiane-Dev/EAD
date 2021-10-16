<?php

    include('config.php');
    include('views/modelos/header.php');

    $homeController = new \controladores\homeController();
    $aulaController = new \controladores\aulaController();

    Router::get('/',function() use ($homeController){
        $homeController->index();
    });

    Router::get('/login', function() use ($homeController){
        $homeController->index();
    });
    
    Router::get('area_aluno/aula/?', function($arg) use ($aulaController){
        $aulaController->index($arg);
    });

    if(Router::isExecuted() == false){
        include('views/404.php');
        die();
    }
    include('views/modelos/footer.php');

?>