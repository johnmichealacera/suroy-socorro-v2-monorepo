<?php
// The Template and PageBuilder classes are already included by start_server.php
// Create page builder
$pageBuilder = new FlexiblePageBuilder();

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
                                <option value="club-tara">Club Tara</option>
                                <option value="dagatan">Dagatan</option>
                                <option value="ecopark-grande">Ecopark Grande</option>
                                <option value="hidden-resort">Hidden Resort</option>
                                <option value="magkahuyog">Magkahuyog Falls</option>
                                <option value="pagatpat-treehouse">Pagatpat Treehouse</option>
                                <option value="puyangi-resort">Puyangi Beach Resort</option>
                                <option value="salog-busay">Salog Busay</option>
                                <option value="sohoton">Sohoton</option>
                                <option value="sunrise-peak">Sunrise Peak</option>
                                <option value="taruc-swimming">Taruc Swimming Pool</option>
                                <option value="tiktikan">Tiktikan</option>
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
$pageBuilder->buildCustomPage($content, 'My Page', 'Description here', $options);
?>

<script>
    // Add click event listener to the submit button
    document.getElementById('submitButton').addEventListener('click', function() {
        // Get the selected value from the dropdown
        var selectedValue = document.getElementById('destinationSelect').value;
        window.location.href = `../public/pages/spots/${selectedValue}.php`;
    });
</script>