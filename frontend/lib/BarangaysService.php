<?php

require_once __DIR__ . '/ApiClient.php';

class BarangaysService {
    private $apiClient;

    public function __construct() {
        $this->apiClient = new ApiClient();
    }

    public function getAllBarangays() {
        try {
            return $this->apiClient->get('/barangays');
        } catch (Exception $e) {
            error_log('Error fetching barangays: ' . $e->getMessage());
            return [];
        }
    }

    public function getBarangayBySlug($slug) {
        try {
            return $this->apiClient->get('/barangays/' . $slug);
        } catch (Exception $e) {
            error_log('Error fetching barangay: ' . $e->getMessage());
            return null;
        }
    }
} 