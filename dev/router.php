<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (!is_string($path) || !preg_match('~^/(?:[a-zA-Z0-9_-]+/)*(?:[a-zA-Z0-9_-]+(?:\.php)?)?$~D', $path)
    || preg_match('~^/(?:dev|node_modules)(?:/|$)~', $path)) {
    http_response_code(404);
    return;
}

$file = $root . $path;
if (is_dir($file)) {
    $file = rtrim($file, '/') . '/index.php';
} elseif (!str_ends_with($file, '.php')) {
    $file .= '.php';
}

if (!is_file($file)) {
    http_response_code(404);
    return;
}

ob_start();
require $file;
$html = ob_get_clean();
echo str_ireplace('</head>', '<script type="module" src="/@vite/client"></script></head>', $html);
