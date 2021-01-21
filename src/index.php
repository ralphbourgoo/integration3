<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'template',
    'action' => 'index'
  ),
  'winkel' => array(
    'controller' => 'template',
    'action' => 'winkel'
  ),
  'winkelwagen' => array(
    'controller' => 'Orders',
    'action' => 'winkelwagen'
  ),
  'formulier' => array(
    'controller' => 'template',
    'action' => 'formulier'
  ),
  'bevestiging' => array(
    'controller' => 'template',
    'action' => 'bevestiging'
  ),
  'checklist' => array(
    'controller' => 'template',
    'action' => 'checklist'
  ),
  'startpage' => array(
    'controller' => 'template',
    'action' => 'startpage'
  ),
  'tutorial' => array(
    'controller' => 'template',
    'action' => 'tutorial'
  ),
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
