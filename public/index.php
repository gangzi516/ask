<?php
define('APP_PATH', dirname(__DIR__) . '/private/');
define('ENGINE_PATH', "D:/www/newengine/Engine");

include ENGINE_PATH . '/Application.php';

$application = new \Engine\Application();

$application->run();