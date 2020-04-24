<?php
include 'autoload.php';

/**
 * basic routing routine
 */
$path = explode("/", ($_REQUEST['path'] ?? ""));

$controller = (empty($path[0]) ? "Home" : $path[0]);
$actionName = (empty($path[1]) ? "index" : $path[1]);
$action =  $actionName . 'Action';
$controllerPath = __DIR__ . '/../app/controllers/' . $controller . '.php';
$viewPath = __DIR__ . '/../app/views/' . $controller . '/'. $actionName . '.php';

if (file_exists($controllerPath)) {
    include $controllerPath;

    $controller = new $controller();
    $controller->$action();

    if (file_exists($viewPath)) {
        include $viewPath;
    }
} else {
    echo 'request not found: controller/action (' . $controller.'/'.$action . ')';
}
