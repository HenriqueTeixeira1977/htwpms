<?php

require '../vendor/autoload.php';

require '../config/config.php';

use App\Core\Router;

$router=new Router();

$router->run();