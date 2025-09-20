<?php
// router.php for PHP built-in server

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$requested = __DIR__ . $uri;

// Serve the requested file if it exists
if ($uri !== '/' && file_exists($requested)) {
    return false;
}

// Otherwise, route all requests to index.php (CodeIgniter front controller)
require_once __DIR__ . '/index.php';
