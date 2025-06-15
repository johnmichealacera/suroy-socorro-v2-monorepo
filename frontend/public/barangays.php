<?php
// The Template and PageBuilder classes are already included by start_server
require_once __DIR__ . '/../lib/BarangaysService.php';

// Create page builder
$pageBuilder = new FlexiblePageBuilder();

// Fetch barangays from API
$barangaysService = new BarangaysService();
$barangays = $barangaysService->getAllBarangays();

// Generate barangay cards dynamically
$barangayCards = '';
if (!empty($barangays)) {
    foreach ($barangays as $barangay) {
        $barangayCards .= '
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-white text-center mb-2 py-5 px-4">
                <a href="barangays/' . htmlspecialchars($barangay['slug']) . '">
                    <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                </a>
                <h5 class="mb-2">' . htmlspecialchars($barangay['name']) . '</h5>
                <p class="m-0">' . htmlspecialchars($barangay['description']) . '</p>
            </div>
        </div>';
    }
} else {
    // Fallback content if API is not available
    $barangayCards = '
    <div class="col-12 text-center">
        <p>Unable to load barangay data. Please try again later.</p>
    </div>';
}

// Page content
$content = '
    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>List of Barangays</h1>
            </div>
            <div class="row">
                ' . $barangayCards . '
            </div>
        </div>
    </div>
    <!-- Service End -->
';

// A complex page with multiple sections
$options = [
    'includes' => [
        ['file' => 'includes/header-section.php', 'data' => [
            'headerTitle' => 'Barangays',
            'breadcrumbItems' => [
                ["text" => "Home", "url" => "/"],
                ["text" => "Information", "url" => null]
            ]
        ]],
        ['content' => $content],
        ['file' => 'includes/footer']
    ],
];

// Build the page
$pageBuilder->buildCustomPage($content, 'My Page', 'Description here', $options);
?>