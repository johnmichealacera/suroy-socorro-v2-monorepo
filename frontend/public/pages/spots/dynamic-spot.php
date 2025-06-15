<?php
// Get the spot slug from the URL
$spotSlug = $_GET['slug'] ?? '';

if (empty($spotSlug)) {
    // Redirect to tourist spots page if no slug provided
    header('Location: /tourist-spots');
    exit;
}

// Create page builder
$pageBuilder = new FlexiblePageBuilder();
// Fetch tourist spot data from API
$touristSpotsService = new TouristSpotsService();
$spot = $touristSpotsService->getTouristSpotBySlug($spotSlug);

if (!$spot) {
    // Spot not found, show error page
    $content = '
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="text-danger">Tourist Spot Not Found</h1>
                    <p class="lead">The tourist spot you are looking for does not exist or has been removed.</p>
                    <a href="/tourist-spots" class="btn btn-primary">Back to Tourist Spots</a>
                </div>
            </div>
        </div>
    </div>';
    
    $options = [
        'includes' => [
            ['file' => 'includes/header-section.php', 'data' => [
                'headerTitle' => 'Spot Not Found',
                'breadcrumbItems' => [
                    ["text" => "Tourist Spots", "url" => "/tourist-spots"],
                    ["text" => "Not Found", "url" => null]
                ]
            ]],
            ['content' => $content],
            ['file' => 'includes/footer.php']
        ],
    ];
    
    $pageBuilder->buildCustomPage($content, 'Spot Not Found', 'Tourist spot not found', $options);
    exit;
}

// Format data for display
$categoryName = isset($spot['category']['name']) ? htmlspecialchars($spot['category']['name']) : 'Uncategorized';
$barangayName = isset($spot['barangay']['name']) ? htmlspecialchars($spot['barangay']['name']) : 'Unknown';

// Get images from the spot data
$mainImage = '/public/img/tourist-spots/default-spot.jpg';
$detailImage1 = '/public/img/tourist-spots/default-spot.jpg';
$detailImage2 = '/public/img/tourist-spots/default-spot.jpg';
$howToGetThereImage = '/public/img/tourist-spots/default-spot.jpg';

if (!empty($spot['images'])) {
    foreach ($spot['images'] as $image) {
        switch ($image['image_type']) {
            case 'main':
                $mainImage = $image['url'];
                break;
            case 'detail':
                if ($detailImage1 === '/public/img/tourist-spots/default-spot.jpg') {
                    $detailImage1 = $image['url'];
                } else {
                    $detailImage2 = $image['url'];
                }
                break;
            case 'how_to_get_there':
                $howToGetThereImage = $image['url'];
                break;
        }
    }
}

// Generate map iframe if coordinates are available
$mapIframe = '';
if (!empty($spot['latitude']) && !empty($spot['longitude'])) {
    $mapIframe = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.0793423908126!2d' . $spot['longitude'] . '!3d' . $spot['latitude'] . '!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMzcnNDAuMCJOIDEyNcKwNTgnMDAuMCJF!5e0!3m2!1sen!2sph!4v1718528477250!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
} else {
    $mapIframe = '<div class="bg-light p-4 text-center" style="height: 450px; display: flex; align-items: center; justify-content: center;">
        <p class="text-muted">Map location not available</p>
    </div>';
}

// Page content
$content = '
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Tourist Spot Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="' . $mainImage . '" alt="' . htmlspecialchars($spot['name']) . '">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">' . htmlspecialchars($spot['short_description']) . '</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>' . htmlspecialchars($spot['short_description']) . '</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="' . $detailImage1 . '">
                            <h5 class="mb-3">Details</h5>
                            <p>' . nl2br(htmlspecialchars($spot['description'])) . '</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="' . $howToGetThereImage . '">
                            <p>' . nl2br(htmlspecialchars($spot['how_to_get_there'])) . '</p>
                        </div>
                    </div>
                    <!-- Tourist Spot Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        ' . $mapIframe . '
                        <p>' . htmlspecialchars($spot['short_description']) . '</p>
                    </div>
    
                    <!-- Explore More -->
                    <?php include_once("../../includes/explore-more.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
';

// A complex page with multiple sections
$options = [
    'includes' => [
        ['file' => 'includes/header-section.php', 'data' => [
            'headerTitle' => htmlspecialchars($spot['name']),
            'breadcrumbItems' => [
                ["text" => "Tourist Spots", "url" => "/tourist-spots"],
                ["text" => "Details", "url" => null]
            ]
        ]],
        ['file' => 'includes/tourist-spots-selector.php'],
        ['content' => $content],
        ['file' => 'includes/footer.php']
    ],
];

// Build the page
$pageBuilder->buildCustomPage($content, htmlspecialchars($spot['name']) . ' - Socorro Suroy', htmlspecialchars($spot['short_description']), $options);
?> 