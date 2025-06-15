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
                                <img class="img-fluid w-100" src="/public/img/barangays/nueva-estrella-court.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Barangay covered court during BFP visit</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Nueva Estrella is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 1,876. This represented 7.23% of the total population of Socorro.</p>
                            <p>The household population of Nueva Estrella in the 2015 Census was 1,854 broken down into 358 households or an average of 5.18 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in Nueva Estrella (1990‑2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">1,452</td><td>242</td><td>6.00</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">1,691</td><td>303</td><td>5.58</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">1,853</td><td>324</td><td>5.72</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">1,553</td><td>293</td><td>5.30</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">1,740</td><td>331</td><td>5.26</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">1,854</td><td>358</td><td>5.18</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/barangays/nueva-estrella-court1.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Nueva Estrella is 5 to 9, with 228 individuals. Conversely, the age group with the lowest population is 75 to 79, with 13 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 36.89% (684). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 58.31% (1,081). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 4.80% (89) in all. The computed Age Dependency Ratios mean that among the population of Nueva Estrella, there are 63 youth dependents to every 100 of the working age population; there are 8 aged/senior citizens to every 100 of the working population; and overall, there are 72 dependents (young and old-age) to every 100 of the working population. The median age of 22 indicates that half of the entire population of Nueva Estrella are aged less than 22 and the other half are over the age of 22.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/socorro-overlooking.jpg">
                            <p>The population of Nueva Estrella grew from 1,452 in 1990 to 1,876 in 2020, an increase of 424 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 0.25%, or an increase of 22 people, from the previous population of 1,854 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Nueva Estrella shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="/barangays/santa-cruz">Santa Cruz, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/navarro">Navarro, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/pamosaingan">Pamosaingan, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/del-pilar">Del Pilar, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/honrado">Honrado, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/songkoy">Songkoy, Socorro, Surigao del Norte</a></li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31469.037370974507!2d125.91100879391293!3d9.627119600995494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e268ad449231%3A0xf9a09002eb92a673!2sNueva%20Estrella%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718450483328!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Nueva Estrella is located on the beautiful island of Bucas Grande at coordinates 9.6291, 125.9364, with an elevation of approximately 58.5 meters (191.9 feet) above sea level. Due to its distance from the municipality proper, traveling to this barangay costs 80 pesos by tricycle or motorcycle.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">JIGGER R. GULTIANO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">NARCISO E. ERONG JR.</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JOEY P. DELA PENA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ELERY C. GADES</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">GREGIE E. GELSANO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">NILE J. RIVAS</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">MELITA Q. JOAQUINO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">SHERWIN E. LOREN</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">FLORAMIE E. JUANITE</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">SHERYL C. DOTILLOS</span>
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
            'headerTitle' => 'Nueva Estrella',
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
$pageBuilder->buildCustomPage($content, 'Nueva Estrella', 'Nueva Estrella - Barangay Details', $options);
?>