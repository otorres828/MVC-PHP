<?php
/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'method' => 'index']);
$router->add('{controller}/{method}');
$router->add('contactanos', ['controller' => 'ContactanosController', 'method' => 'index']);

$router->dispatch($_SERVER['QUERY_STRING']);
