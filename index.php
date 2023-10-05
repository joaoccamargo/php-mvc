<?php

require_once __DIR__.'/core/Core.php';
require_once __DIR__.'/router/routes.php';

spl_autoload_register(function($file))

$core = new Core();
$core->run($routes);