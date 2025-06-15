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
                                <img class="img-fluid w-100" src="/public/img/tourist-spots/club-tara1.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Seaside view of the club tara cottages beautifully lined</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Club Tara Resort: Pride of Socorro</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/tourist-spots/club-tara2.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Club Tara Resort is a breathtaking resort that offers stunning views and a serene atmosphere. Nestled in the tranquil island of Bucas Grande, Club Tara Island Resort features a private beach area, a restaurant and an outdoor swimming pool. It is a wonderful paradise surrounded by its blue and green lagoon. Best for an aspiring sunset, with crystal water facing Pacific Ocean, perfect for relaxing, swimming and snorkeling. Its far far away from crowded place. Safe. Clean and totally fresh air. </p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/club-tara3.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Sunrise Peak Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.0793423908126!2d125.90812377789776!3d9.588429355502655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33015f59218b9877%3A0xfba1bdecfa52a750!2sClub%20Tara%20Resort!5e0!3m2!1sen!2sph!4v1718528477250!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Welcome to Club Tara Resort, Socorro\'s premier destination where stunning cottages and island views await! Accessible by a scenic boat ride for approximately 500 pesos per head, indulge in luxurious rooms, delectable cuisine, jacuzzi relaxation, and more. Experience all this starting at just 3500 pesos per night, and make your stay a memorable retreat into paradise!</p>
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
            'headerTitle' => 'Club Tara Resort',
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
$pageBuilder->buildCustomPage($content, 'Club Tara Resort', 'Club Tara Resort - Pride of Socorro', $options);
?>