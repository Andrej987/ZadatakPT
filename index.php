<?php

use Core\Request;
use Core\Router;

require 'vendor/autoload.php';

$router = Router::load('routes.php');

$router->direct(Request::uri(),Request::method());