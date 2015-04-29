<?php

require __DIR__ . '/autoload.php';


$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$act = !empty($_GET['act']) ? $_GET['act'] : 'all';
$ctrlClassName = ucfirst($ctrl) . 'Controller';


try {
    $controller = new $ctrlClassName;
    $method = 'action' . ucfirst($act);
    $controller->actionAll();
} catch (Exception $e){
    echo 'Ошибка: ' . $e->getMessage();
}



