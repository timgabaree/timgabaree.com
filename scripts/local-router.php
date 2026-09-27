<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$documentRoot = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

// Let the PHP server serve real files normally:
// CSS, JavaScript, images, PDFs, etc.
if ($path !== '/' && is_file($documentRoot . $path)) {
    return false;
}

// Home page
if ($path === '/') {
    require $documentRoot . '/index.php';
    return true;
}

// Convert clean URLs:
// /contact -> /contact.php
// /about -> /about.php
// /technology-leadership -> /technology-leadership.php
if (pathinfo($path, PATHINFO_EXTENSION) === '') {
    $phpFile = $documentRoot . $path . '.php';

    if (is_file($phpFile)) {
        require $phpFile;
        return true;
    }
}

// Nothing matched
http_response_code(404);

$notFound = $documentRoot . '/404.html';

if (is_file($notFound)) {
    require $notFound;
}

return true;
