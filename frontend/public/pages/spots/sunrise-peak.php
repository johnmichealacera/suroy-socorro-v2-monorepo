<?php
// The Template and PageBuilder classes are already included by start_server.php
// Create page builder
$pageBuilder = new FlexiblePageBuilder();

// Page content
$content = '
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Sunrise Peak Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/public/img/tourist-spots/sunrise-peak5.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Overlooking swing with a taste of nature</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Grande Sunrise Peak is a newly opened destination for people who are fond of camping, relaxing with nature and other activities.</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/tourist-spots/sunrise-peak2.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Natural and breathtaking tourist destinations in the municipality of Socorro in Siargao islands are now open to tourists. One place not to be missed is the Grande Sunrise Peak. Enjoy the panoramic view of Siargao and Bucas Grande Island. It also offers good food, campsites, trails and other upland activities.
                            After the onslaught of Typhoon Odette, the local tourism is now reviving, offering better and meaningful experience.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/sunrise-peak4.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Sunrise Peak Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.734506328532!2d125.96008637790018!3d9.618113254937704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e32bb8b62ef3%3A0x292452152f98525!2sGrande%20Sunrise%20Peak!5e0!3m2!1sen!2sph!4v1718524970994!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Experience the majestic Grande Sunrise Peak, located in Barangay Rizal, right at the heart of the municipal proper. Accessible from the port for just 40 pesos, it offers breathtaking views that are worth every penny of the journey.</p>
                    </div>
    
                    <!-- Explore More -->
                    <?php include_once("explore-more.php"); ?>
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
            'headerTitle' => 'Grande Sunrise Peak',
            'breadcrumbItems' => [
                ["text" => "Tourist Spots", "url" => "/tourist-spots"],
                ["text" => "Details", "url" => null]
            ]
        ]],
        ['content' => $content],
        ['file' => 'includes/footer.php']
    ],
];

// Build the page
$pageBuilder->buildCustomPage($content, 'Grande Sunrise Peak', 'Grande Sunrise Peak - Overlooking swing with a taste of nature', $options);
?>