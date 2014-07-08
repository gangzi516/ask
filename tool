#!/usr/bin/env php
<?php
define('APP_PATH', __DIR__ . '/private/');
define('ENGINE_PATH', "D:\www\newengine/Engine");

include ENGINE_PATH . '/Application.php';

$application = new \Engine\Application();
$application->setConsoleEnvironment();
$console = \Engine\Console\Application::start($application);
$status = $console->run();

exit($status);