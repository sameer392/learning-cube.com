<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (PHP_SAPI !== 'cli' && PHP_SAPI !== 'phpdbg') {
    $subDirectory = '/lc';

    foreach (['REQUEST_URI', 'PATH_INFO', 'ORIG_PATH_INFO'] as $key) {
        if (! empty($_SERVER[$key]) && str_starts_with($_SERVER[$key], $subDirectory)) {
            $trimmed = substr($_SERVER[$key], strlen($subDirectory));
            $_SERVER[$key] = $trimmed === '' ? '/' : (str_starts_with($trimmed, '/') ? $trimmed : '/'.$trimmed);
        }
    }

    $scriptPrefix = $subDirectory.'/public';
    foreach (['SCRIPT_NAME', 'PHP_SELF'] as $key) {
        if (! empty($_SERVER[$key]) && str_starts_with($_SERVER[$key], $scriptPrefix)) {
            $_SERVER[$key] = substr($_SERVER[$key], strlen($subDirectory));
            if ($_SERVER[$key] === '') {
                $_SERVER[$key] = '/';
            }
        }
    }
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
