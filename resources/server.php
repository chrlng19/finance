<?php

/*
|--------------------------------------------------------------------------
| Laravel - A PHP Framework For Web Artisans
|--------------------------------------------------------------------------
|
| This file creates a new Laravel application and serves as the entry
| point for the application. All incoming requests to the application
| are directed here. This script also enables compatibility for
| PHP built-in server which is used for local development.
|
*/

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
