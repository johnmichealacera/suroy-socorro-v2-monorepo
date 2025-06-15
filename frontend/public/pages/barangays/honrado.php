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
                    <!-- Barangay Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" style="height: 800px" src="/public/img/barangays/honrado-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Image above shows the barangay seminar</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Honrado is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 422. This represented 1.63% of the total population of Socorro.</p>
                            <p>The household population of Honrado in the 2015 Census was 365 broken down into 80 households or an average of 4.56 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in Honrado (1990-2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">553</td><td>96</td><td>5.76</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">375</td><td>68</td><td>5.51</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">445</td><td>84</td><td>5.30</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">369</td><td>83</td><td>4.45</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">436</td><td>98</td><td>4.45</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">365</td><td>80</td><td>4.56</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" style="height: 500px" src="/public/img/barangays/honrado.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Honrado is 10 to 14, with 43 individuals. Conversely, the age groups with the lowest population are in the ranges 75 to 79, and 80 and over, with 5 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 30.96% (113). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 63.01% (230). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 6.03% (22) in all. The computed Age Dependency Ratios mean that among the population of Honrado, there are 49 youth dependents to every 100 of the working age population; there are 10 aged/senior citizens to every 100 of the working population; and overall, there are 59 dependents (young and old-age) to every 100 of the working population. The median age of 26 indicates that half of the entire population of Honrado are aged less than 26 and the other half are over the age of 26.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/socorro-overlooking.jpg">
                            <p>The population of Honrado fell from 553 in 1990 to 422 in 2020, a decrease of 131 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 3.10%, or an increase of 57 people, from the previous population of 365 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Honrado shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="/barangays/nueva-estrella">Nueva Estrella, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/pamosaingan">Pamosaingan, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/del-pilar">Del Pilar, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/salog">Salog, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/sering">Sering, Socorro, Surigao del Norte</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Brangay Detail End -->
    
                    <!-- Notes Start-->
                    <?php include_once("barangay-notes.php"); ?>
                    <!-- Notes End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Barangay Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31466.566746698154!2d125.91519791119953!3d9.653602568967713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e2de1a88e755%3A0xd914f8505c6ddeb4!2sHonrado%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718442184812!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Honrado is located on the stunning island of Bucas Grande at coordinates 9.6442, 125.9427, with an elevation of approximately 77.6 meters (254.6 feet) above sea level. Traveling from the municipality\'s port to this scenic barangay is easy, with a tricycle or motorcycle ride costing only 45 pesos.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">DELIO G. CORDITA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">MANNY EUGINE L. QUIRIDO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JUNRIE L. DELA PENA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">MELINDA B. TELIN</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">LARRY E. PLAZA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ZALDY M. SANICO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JUDITH R. BANAYBANAY</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ROSALITO B. GALO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">SWEETCIL R. LIRAY</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">GLENN MAR D. GALO</span>
                                </li>
                            </ul>
                        </div>
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
            'headerTitle' => 'Honrado',
            'breadcrumbItems' => [
                ["text" => "Barangays", "url" => "/barangays"],
                ["text" => "Details", "url" => null]
            ]
        ]],
        ['content' => $content],
        ['file' => 'includes/footer.php']
    ],
];

// Build the page
$pageBuilder->buildCustomPage($content, 'Honrado', 'Honrado - Barangay Details', $options);
?>