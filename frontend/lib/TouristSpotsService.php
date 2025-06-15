<?php

require_once __DIR__ . '/ApiClient.php';

class TouristSpotsService {
    private $apiClient;

    public function __construct() {
        $this->apiClient = new ApiClient();
    }

    public function getAllTouristSpots() {
        try {
            return $this->apiClient->get('/tourist-spots');
        } catch (Exception $e) {
            error_log('Error fetching tourist spots: ' . $e->getMessage());
            return [];
        }
    }

    public function getFeaturedTouristSpots() {
        try {
            return $this->apiClient->get('/tourist-spots/featured');
        } catch (Exception $e) {
            error_log('Error fetching featured tourist spots: ' . $e->getMessage());
            return [];
        }
    }

    public function getTouristSpotBySlug($slug) {
        try {
            return $this->apiClient->get('/tourist-spots/' . $slug);
        } catch (Exception $e) {
            error_log('Error fetching tourist spot: ' . $e->getMessage());
            return null;
        }
    }

    public function getAllCategories() {
        try {
            return $this->apiClient->get('/tourist-spots/categories');
        } catch (Exception $e) {
            error_log('Error fetching categories: ' . $e->getMessage());
            return [];
        }
    }
} 