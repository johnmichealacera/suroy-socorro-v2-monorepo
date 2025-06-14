<?php

// Environment
define('ENVIRONMENT', getenv('NODE_ENV') ?: 'development');

// API Configuration
define('API_BASE_URL', getenv('API_BASE_URL') ?: 'http://localhost:3001/api/v1');
define('API_TIMEOUT', getenv('API_TIMEOUT') ?: 30);
define('API_KEY', getenv('API_KEY') ?: null);

// Frontend Configuration
define('FRONTEND_URL', getenv('FRONTEND_URL') ?: 'http://localhost:8000');

// Cache settings
define('CACHE_ENABLED', getenv('CACHE_ENABLED') ?: true);
define('CACHE_DURATION', getenv('CACHE_DURATION') ?: 3600);

// Error reporting
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Helper functions
function asset($path) {
    return '/' . ltrim($path, '/');
}

function api_url($endpoint) {
    return API_BASE_URL . '/' . ltrim($endpoint, '/');
}

function is_api_available() {
    try {
        $apiClient = new ApiClient();
        $apiClient->get('/health'); // Assuming you have a health endpoint
        return true;
    } catch (Exception $e) {
        return false;
    }
}
