<?php

namespace Controllers;

use Exception;

use MVC\Router;
use Model\ActiveRecord; 

class MenuController
{
    public static function index(Router $router)
    {
        $router->render('menu/index', []);
    }

  
  
}