<?php

// Create page builder
$pageBuilder = new FlexiblePageBuilder();
// Fetch tourist spots from API
$touristSpotsService = new TouristSpotsService();
$touristSpots = $touristSpotsService->getAllTouristSpots();
$categories = $touristSpotsService->getAllCategories();

// Generate tourist spots cards
$touristSpotsCards = '';
if (!empty($touristSpots)) {
    foreach ($touristSpots as $spot) {
        $featuredBadge = $spot['is_featured'] ? '<span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Featured</span>' : '';
        $categoryName = isset($spot['category']['name']) ? htmlspecialchars($spot['category']['name']) : 'Uncategorized';
        $barangayName = isset($spot['barangay']['name']) ? htmlspecialchars($spot['barangay']['name']) : 'Unknown';
        $entranceFee = $spot['entrance_fee'] > 0 ? '₱' . number_format($spot['entrance_fee'], 2) : 'Free';
        
        $touristSpotsCards .= '
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2 position-relative">
                ' . $featuredBadge . '
                <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>' . $barangayName . '</small>
                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>' . $categoryName . '</small>
                    </div>
                    <a class="h5 text-decoration-none" href="/spots/' . htmlspecialchars($spot['slug']) . '">' . htmlspecialchars($spot['name']) . '</a>
                    <div class="border-top mt-4 pt-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>' . $entranceFee . '</h6>
                            <h5 class="m-0">' . htmlspecialchars($spot['difficulty_level']) . '</h5>
                        </div>
                    </div>
                    <p class="mt-3 mb-0">' . htmlspecialchars($spot['short_description']) . '</p>
                    <div class="mt-3">
                        <small class="text-muted">
                            <i class="fa fa-clock mr-1"></i>' . htmlspecialchars($spot['estimated_duration']) . '
                        </small>
                    </div>
                </div>
            </div>
        </div>';
    }
} else {
    // Fallback content if API is not available
    $touristSpotsCards = '
    <div class="col-12 text-center">
        <p>Unable to load tourist spots data. Please try again later.</p>
    </div>';
}

// Page content
$content = '

    <!-- Tourist Spots Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tourist Spots</h6>
                <h1>Discover Amazing Places in Socorro</h1>
            </div>
            <div class="row">
                ' . $touristSpotsCards . '
            </div>
        </div>
    </div>
    <!-- Tourist Spots End -->
';

// A complex page with multiple sections
$options = [
    'includes' => [
        ['file' => 'includes/header-section.php', 'data' => [
            'headerTitle' => 'Tourist Spots',
            'breadcrumbItems' => [
                ["text" => "Home", "url" => "/"],
                ["text" => "Destination", "url" => null]
            ]
        ]],
        ['content' => $content],
        ['file' => 'includes/tourist-destination.php'],
        ['file' => 'includes/footer.php']
    ],
];

// Build the page
$pageBuilder->buildCustomPage($content, 'Tourist Spots - Socorro Suroy', 'Discover amazing tourist spots in Socorro Island', $options);
?>