<?php

$router->get('home','HomeController');
$router->get('article', 'ArticleController');
$router->get('login', 'LoginController');
$router->post('login', 'LoginController');
$router->get('dashboard', 'DashboardController');
$router->post('dashboard', 'DashboardController');
$router->get('user', 'UserController');
$router->post('user', 'UserController');
