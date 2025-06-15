<?php

// Create page builder
$pageBuilder = new FlexiblePageBuilder();
// Fetch tourist spots from API
$touristSpotsService = new TouristSpotsService();
$touristSpots = $touristSpotsService->getAllTouristSpots();
$categories = $touristSpotsService->getAllCategories();

// Generate destination options dynamically
$destinationOptions = '';
if (!empty($touristSpots)) {
    foreach ($touristSpots as $spot) {
        $destinationOptions .= '<option value="' . htmlspecialchars($spot['slug']) . '">' . htmlspecialchars($spot['name']) . '</option>';
    }
} else {
    // Fallback options if API is not available
    $destinationOptions = '
        <option value="socorro-beach">Socorro Beach</option>
        <option value="mount-socorro">Mount Socorro</option>
        <option value="socorro-church">Socorro Church</option>
        <option value="socorro-waterfall">Socorro Waterfall</option>
        <option value="socorro-lighthouse">Socorro Lighthouse</option>
    ';
}

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
    <!-- Booking Start -->
    <div class="container-fluid booking mt-5">
        <div class="container">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="mb-3 mb-md-0" style="width: 100%">
                            <select id="destinationSelect" class="custom-select px-4" style="height: 47px;">
                                <option value="" selected disabled>Destination</option>
                                ' . $destinationOptions . '
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button id="submitButton" class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

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
        ['file' => 'includes/footer.php']
    ],
];

// Build the page
$pageBuilder->buildCustomPage($content, 'Tourist Spots - Socorro Suroy', 'Discover amazing tourist spots in Socorro Island', $options);
?>

<script>
    // Add click event listener to the submit button
    document.getElementById('submitButton').addEventListener('click', function() {
        // Get the selected value from the dropdown
        var selectedValue = document.getElementById('destinationSelect').value;
        if (selectedValue) {
            window.location.href = `/spots/${selectedValue}`;
        }
    });
</script>