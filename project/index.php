<?php

require_once "./vendor/autoload.php";

// use App\Core\Database;
// $db = new Database();
// $data = $db->connection();
// var_dump($data);

use App\Core\Router;



$router = new Router();
require_once './App/config/routes.php';



$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


