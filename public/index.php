<?php

$query = rtrim($_SERVER['QUERY_STRING']);

require '../vendor/core/Router.php';

// Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
// Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
// Router::add('', ['controller' => 'Main', 'action' => 'index']);

// print_r(Router::getRoutes());

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('([a-z-]+)/([a-z-]+)');

if(Router::matchRoute($query)){
    print_r(Router::getRoute());
}else{
    echo '404';
}