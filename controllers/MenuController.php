<?php

namespace Controllers;
use Exception;
use MVC\Router;
use Model\Usuario;

class MenuController
{

    public static function index(Router $router)
    {        
        if ($_SESSION['auth_user'] != "") {
            $router->render('menu/index', []);
        } else {
            $router->render('login/index', []);
        }
    }
    public static function closeSessionAPI(Router $router) {
        $sesion = session_destroy();
    
        if ($sesion == true) {
            echo json_encode([
                'codigo' => '1'
            ]);
            exit;
        } else {
            echo json_encode([
                'codigo' => '2'
            ]);
            exit;
        }
    }
    

}