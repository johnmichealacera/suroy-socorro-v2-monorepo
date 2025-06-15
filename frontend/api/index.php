<?php
/**
 * Vercel serverless function - main entry point
 * This handles all requests and routes them to your PageBuilder system
 */

// Set the working directory to the frontend directory
chdir(__DIR__ . '/..');

// Define base paths
define('FRONTEND_ROOT', __DIR__ . '/..');
define('PUBLIC_DIR', FRONTEND_ROOT . '/public');
define('LIB_DIR', FRONTEND_ROOT . '/lib');
define('INCLUDES_DIR', FRONTEND_ROOT . '/includes');

// Include the main files
require_once LIB_DIR . '/Template.php';
require_once LIB_DIR . '/PageBuilder.php';
require_once LIB_DIR . '/FlexiblePageBuilder.php';

// Get the request URI
$uri = $_SERVER['REQUEST_URI'];

// Remove query string
$uri = strtok($uri, '?');

// Remove leading slash
$uri = ltrim($uri, '/');

// Remove 'api/' prefix if present
$uri = str_replace('api/', '', $uri);

// If no URI or just '/', serve index.php
if (empty($uri) || $uri === '/') {
    require PUBLIC_DIR . '/index.php';
    return;
}

// Handle public assets (CSS, JS, images, etc.)
if (strpos($uri, 'public/') === 0) {
    // Remove 'public/' prefix and serve from public directory
    $assetPath = str_replace('public/', '', $uri);
    $file = PUBLIC_DIR . '/' . $assetPath;
    
    if (file_exists($file) && is_file($file)) {
        // Serve the file directly
        return false; // Let PHP handle it
    }
}

// Check for main pages in public directory first
$mainPages = [
    'tourist-spots.php',
    'barangays.php', 
    'delicacies.php',
    'about.php',
    'contact-us.php'
];

foreach ($mainPages as $page) {
    if ($uri === $page || $uri === str_replace('.php', '', $page)) {
        $file = PUBLIC_DIR . '/' . $page;
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
}

// Check if file exists in public directory (for direct access)
$file = PUBLIC_DIR . '/' . $uri;

if (file_exists($file) && is_file($file)) {
    // Serve the file directly
    return false; // Let PHP handle it
}

// Check if it's a PHP file
if (file_exists($file . '.php')) {
    require $file . '.php';
    return;
}

// Check for clean URLs: /spots/filename.php
if (strpos($uri, 'spots/') === 0) {
    $spot = str_replace('spots/', '', $uri);
    $spotFile = PUBLIC_DIR . '/pages/spots/' . $spot . '.php';
    
    if (file_exists($spotFile)) {
        require $spotFile;
        return;
    }
}

// Check for clean URLs: /barangays/filename.php
if (strpos($uri, 'barangays/') === 0) {
    $barangay = str_replace('barangays/', '', $uri);
    $barangayFile = PUBLIC_DIR . '/pages/barangays/' . $barangay . '.php';
    
    if (file_exists($barangayFile)) {
        require $barangayFile;
        return;
    }
}

// 404 - File not found
http_response_code(404);
echo "404 - Page not found";
?>
