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
                    <!-- Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/public/img/tourist-spots/hidden-resort1.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Great view of the sea and pathways</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Unveil the Magic of Hidden Resort</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/tourist-spots/hidden-resort4.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Discover Hidden Resort, a spectacular oasis nestled in the heart of the sea. Perfect for thrill-seekers and serenity-lovers alike, this vibrant getaway offers exhilarating boat rides, surfing adventures, delectable cuisine, and even a unique fish spa experience. The resort\'s colorful, charming cottages line the beach, providing an enchanting backdrop for your stay. Ideal for tourists seeking unique surroundings and unforgettable experiences, Hidden Resort is your ultimate destination for fun, relaxation, and seaside bliss. Come and see why it\'s the go-to spot for an extraordinary escape.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/hidden-resort6.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.2580843359324!2d125.92998767789642!3d9.573007155795626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e1c707fd9e81%3A0x86c5d97dd036cd20!2sHidden%20Island%20Resort!5e0!3m2!1sen!2sph!4v1718527478795!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Discover Hidden Island Resort in Helene where bliss awaits! Embark on a journey for just 70 pesos from the port and indulge in pure relaxation. Stay in cozy rooms starting at 2,750 per person for a delightful 2-day, 1-night retreat including entrance fees, Sohoton tour, and more. Unwind in paradise and make memories that last a lifetime!</p>
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
            'headerTitle' => 'Hidden Resort',
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
$pageBuilder->buildCustomPage($content, 'Hidden Resort', 'Hidden Resort - Unveil the Magic of Hidden Resort', $options);
?>