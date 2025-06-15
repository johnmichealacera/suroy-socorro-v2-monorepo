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
                                <img class="img-fluid w-100" src="/public/img/barangays/sering.png" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Group of houses located in the mountain part of Barangay Sering</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Sering is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 4,738. This represented 18.26% of the total population of Socorro.</p>
                            <p>The household population of Sering in the 2015 Census was 1,927 broken down into 392 households or an average of 4.92 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in Sering (1990‑2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">568</td><td>96</td><td>5.92</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">664</td><td>109</td><td>6.09</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">831</td><td>151</td><td>5.50</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">890</td><td>154</td><td>5.78</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">1,326</td><td>245</td><td>5.41</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">1,927</td><td>392</td><td>4.92</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/barangays/bucas-grande-islands.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Sering is 5 to 9, with 260 individuals. Conversely, the age group with the lowest population is 80 and over, with 7 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 38.66% (745). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 56.88% (1,096). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 4.46% (86) in all. The computed Age Dependency Ratios mean that among the population of Sering, there are 68 youth dependents to every 100 of the working age population; there are 8 aged/senior citizens to every 100 of the working population; and overall, there are 76 dependents (young and old-age) to every 100 of the working population. The median age of 20 indicates that half of the entire population of Sering are aged less than 20 and the other half are over the age of 20.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/socorro-overlooking.jpg">
                            <p>The population of Sering grew from 568 in 1990 to 4,738 in 2020, an increase of 4,170 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 20.85%, or an increase of 2,811 people, from the previous population of 1,927 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Sering shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="/barangays/honrado">Honrado, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/del-pilar">Del Pilar, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/salog">Salog, Socorro, Surigao del Norte</a></li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31465.642371633094!2d125.95504489393468!3d9.663492594211874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e336b7aeb16f%3A0xb21ec62ae88a0560!2sSering%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718455936805!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Sering is located on the island of Bucas Grande at coordinates 9.6851, 125.9763, with an elevation of approximately 8.5 meters (27.9 feet) above sea level. To travel to this barangay from the port, the fee is approximately 110 pesos by tricycle or motorcycle.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">RENE B. GUMA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">EMALYN D. GUMA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JOCELYN M. TARO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">LUTCHENITO A. DANAS</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">EMERY JANE V. HENSON</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JONATHAN J. BESAS</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">HENEDINA C. CAGATIN</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">CHRISILDA C. JOAQUINO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">CHRISTIAN LLYOD PAYMALAN</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">APPLE MAE B. JUALO</span>
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
            'headerTitle' => 'Sering',
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
$pageBuilder->buildCustomPage($content, 'Sering', 'Sering - Barangay Details', $options);
?>