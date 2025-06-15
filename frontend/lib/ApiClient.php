<?php

require_once __DIR__ . '/EnvLoader.php';

class ApiClient {
    private $baseUrl;
    private $apiKey;
    private $timeout;
    private $useCurl;

    public function __construct($baseUrl = null, $apiKey = null) {
        // Load environment variables
        EnvLoader::load(__DIR__ . '/../.env');
        
        $this->baseUrl = $baseUrl ?: getenv('API_BASE_URL');
        
        // Validate base URL
        if (!filter_var($this->baseUrl, FILTER_VALIDATE_URL)) {
            throw new Exception('Invalid API_BASE_URL: ' . $this->baseUrl);
        }
        
        $this->apiKey = $apiKey ?: getenv('API_KEY');
        $this->timeout = getenv('API_TIMEOUT') ?: 30;
        $this->useCurl = function_exists('curl_init');
        
        if (!$this->useCurl) {
            error_log('Warning: cURL not available, using file_get_contents() fallback');
        }
    }

    public function get($endpoint, $params = []) {
        $url = $this->baseUrl . $endpoint;
        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_HTTPHEADER => $this->getHeaders(),
            CURLOPT_SSL_VERIFYPEER => false, // For development
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            throw new Exception('cURL Error: ' . $error);
        }

        if ($httpCode >= 200 && $httpCode < 300) {
            return json_decode($response, true);
        } else {
            throw new Exception('API Error: ' . $httpCode . ' - ' . $response);
        }
    }

    public function post($endpoint, $data = []) {
        $url = $this->baseUrl . $endpoint;

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_HTTPHEADER => $this->getHeaders(),
            CURLOPT_SSL_VERIFYPEER => false,
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            throw new Exception('cURL Error: ' . $error);
        }

        if ($httpCode >= 200 && $httpCode < 300) {
            return json_decode($response, true);
        } else {
            throw new Exception('API Error: ' . $httpCode . ' - ' . $response);
        }
    }

    private function getHeaders() {
        $headers = [
            'Content-Type: application/json',
            'Accept: application/json',
        ];

        if ($this->apiKey) {
            $headers[] = 'Authorization: Bearer ' . $this->apiKey;
        }

        return $headers;
    }
}
