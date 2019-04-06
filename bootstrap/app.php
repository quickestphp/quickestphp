<?php

// Composer autoloader
require_once(realpath(ROOT_PATH . '/vendor/autoload.php'));

use Quickest\Core\Quickest;
use Quickest\Router\Router;

$app = new Quickest();
$router = new Router();
