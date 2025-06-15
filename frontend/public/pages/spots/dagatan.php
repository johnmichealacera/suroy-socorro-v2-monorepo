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
                    <!-- Tiktikan Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/public/img/tourist-spots/dagatan3.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Bird\'s eye view of the resort\'s kayak services</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Another one of the nearest resort from the Sohoton Cove and Jellyfish Sanctuary</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/tourist-spots/dagatan2.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Indulge in exquisite cuisine at Dagatan Bay Resto, where flavors come alive. Offerings are not just limited to mouthwatering delicacies, but also encompass a range of amenities including floating cottages, paddle boards, diving board and crystal-clear kayaks. Immerse yourself in the tranquil beauty of Bucas Grande Island\'s nature as you relish your dining experience.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/dagatan4.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Brangay Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Barangay Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.9582153117885!2d125.9251218748066!3d9.598866479808983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e1f7c090b20b%3A0xce11c76040998adb!2sDagatan%20Sifai%20Resort!5e0!3m2!1sen!2sph!4v1718528005323!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Discover Dagatan Sifai Resort, your perfect escape by the sea! Arrive by boat and enjoy affordable entrance fees of just 40 pesos for adults and 20 pesos for children. Docking fees range from 50 to 250 pesos per hour, while floating cottages await, starting at just 250 pesos up to 1000 pesos. Embrace relaxation and fun in this seaside haven!</p>
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
            'headerTitle' => 'Dagatan Sifai Resort',
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
$pageBuilder->buildCustomPage($content, 'Dagatan Sifai Resort', 'Dagatan Sifai Resort - Indulge in Exquisite Cuisine at Dagatan Bay Resto', $options);
?>