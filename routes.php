<?php

$router->get('users', 'Controllers\Users\UsersController@index');
$router->post('users/store', 'Controllers\Users\UsersController@store');

$router->get('posts','Controllers\Posts\PostsController@index');
$router->post('posts/store', 'Controllers\Posts\PostsController@store');