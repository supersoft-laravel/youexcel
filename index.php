<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell
 */

// Redirect HTTP to HTTPS
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}

// Force non-www (or modify for forcing www)
if (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') {
    header('Location: https://' . substr($_SERVER['HTTP_HOST'], 4) . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}

// Cache control headers for improved SEO
header("Cache-Control: max-age=3600, public");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 3600) . " GMT");

// Decode URI
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__ . '/public' . $uri)) {
    return false;
}

// Include Laravel's main index.php
require_once __DIR__ . '/public/index.php';

