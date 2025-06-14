<?php
// Simple router for development
$uri = $_SERVER['REQUEST_URI'];

// Remove query string
$uri = strtok($uri, '?');

// Remove leading slash
$uri = ltrim($uri, '/');

// Set the working directory to public for proper path resolution
chdir(__DIR__ . '/public');

// If no URI or just '/', serve index.php
if (empty($uri) || $uri === '/') {
    require __DIR__ . '/public/index.php';
    return;
}

// Check if file exists in public directory
$file = __DIR__ . '/public/' . $uri;

if (file_exists($file) && is_file($file)) {
    // Serve the file directly
    return false; // Let PHP handle it
}

// Check if it's a PHP file
if (file_exists($file . '.php')) {
    require $file . '.php';
    return;
}

// Check for barangay pages
if (strpos($uri, 'barangay/') === 0) {
    $barangay = str_replace('barangay/', '', $uri);
    $barangayFile = __DIR__ . '/barangays/' . $barangay . '.php';
    
    if (file_exists($barangayFile)) {
        require $barangayFile;
        return;
    }
}

// Check for spot pages
if (strpos($uri, 'spot/') === 0) {
    $spot = str_replace('spot/', '', $uri);
    $spotFile = __DIR__ . '/public/pages/spots/' . $spot . '.php';
    echo $spotFile;
    
    if (file_exists($spotFile)) {
        require $spotFile;
        return;
    }
}

// 404 - File not found
http_response_code(404);
echo "404 - Page not found";
?>
