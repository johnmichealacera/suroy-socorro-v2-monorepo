<?php
// The Template and PageBuilder classes are already included by start_server
// Create page builder
$pageBuilder = new FlexiblePageBuilder();

// Page content
$content = '
    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>List of Barangays</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item bg-white text-center mb-2 py-5 px-4">
                            <a href="barangays/albino-taruc">
                                <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                            </a>
                            <h5 class="mb-2">Albino Taruc</h5>
                            <p class="m-0">Its population as determined by the 2020 Census was 3,988. This represented 15.37% of the total population of Socorro.</p>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/del-pilar">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Del Pilar</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 511. This represented 1.97% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/helene">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Helene</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 812. This represented 3.13% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/honrado">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Honrado</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 422. This represented 1.63% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/navarro">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Navarro</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 2,822. This represented 10.88% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/nueva-estrella">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Nueva Estrella</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 1,876. This represented 7.23% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/pamosaingan">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Pamosaingan</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 1,191. This represented 4.59% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/rizal">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Rizal</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 4,910. This represented 18.93% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/salog">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Salog</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 1,001. This represented 3.86% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/san-roque">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">San Roque</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 818. This represented 3.15% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/santa-cruz">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Santa Cruz</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 493. This represented 1.90% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/sering">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Sering</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 4,738. This represented 18.26% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/songkoy">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Songkoy</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 1,496. This represented 5.77% of the total population of Socorro.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="barangays/sudlon">
                            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Sudlon</h5>
                        <p class="m-0">Its population as determined by the 2020 Census was 864. This represented 3.33% of the total population of Socorro.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
';

// A complex page with multiple sections
$options = [
    'includes' => [
        ['file' => 'includes/header-section', 'data' => [
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