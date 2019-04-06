<?php

// OS Directory Separator Slash
define('DS', DIRECTORY_SEPARATOR);

// Server Root Path
define('ROOT_PATH', dirname(__DIR__));

// Server Public Path
define('PUBLIC_PATH', __DIR__);

// Require the application bootstrap
require_once(realpath(ROOT_PATH . '/bootstrap/app.php'));
