<?php

session_start();

define('__DS','/');
define('__ROOT',dirname(__DIR__));
define('__SRC', __ROOT. '/src');
define('__VIEW', __SRC. '/view');

function autoloader($c) {
    require __ROOT . __DS . str_replace('\\', __DS ,$c) .'.php';
}

spl_autoload_register('autoloader');

require __ROOT . '/lib.php';
require __ROOT . '/web.php';

src\App\Route::init();