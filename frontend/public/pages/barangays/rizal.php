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
                                <img class="img-fluid w-100" src="/public/img/barangays/rizal-bridge.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Bridge where people go to take pictures</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Rizal, formerly Poblacion, is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 4,910. This represented 18.93% of the total population of Socorro.</p>
                            <p>The household population of Rizal in the 2015 Census was 5,243 broken down into 1,012 households or an average of 5.18 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in Rizal (1990‑2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">2,805</td><td>446</td><td>6.29</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">3,291</td><td>581</td><td>5.66</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">4,251</td><td>707</td><td>6.01</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">4,674</td><td>801</td><td>5.84</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">5,059</td><td>957</td><td>5.29</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">5,243</td><td>1,012</td><td>5.18</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/barangays/hinabangay.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Rizal is 5 to 9, with 604 individuals. Conversely, the age group with the lowest population is 75 to 79, with 37 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 33.76% (1,770). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 61.68% (3,234). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 4.56% (239) in all. The computed Age Dependency Ratios mean that among the population of Rizal, there are 55 youth dependents to every 100 of the working age population; there are 7 aged/senior citizens to every 100 of the working population; and overall, there are 62 dependents (young and old-age) to every 100 of the working population. The median age of 22 indicates that half of the entire population of Rizal are aged less than 22 and the other half are over the age of 22.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/socorro-overlooking.jpg">
                            <p>The population of Rizal grew from 2,805 in 1990 to 4,910 in 2020, an increase of 2,105 people over the course of 30 years. The latest census figures in 2020 denote a negative growth rate of 1.37%, or a decrease of 333 people, from the previous population of 5,243 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Rizal shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="/barangays/albino-taruc">Albino Taruc, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/songkoy">Sonkoy, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/sudlon">Sudlon, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/san-roque">San Roque, Socorro, Surigao del Norte</a></li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11126.817803209797!2d125.94967091724938!3d9.601798818348767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e22cc1d0da63%3A0x64976fb69ec35086!2sRizal%20(Pob.)%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718452034327!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Rizal is located on the scenic island of Bucas Grande at coordinates 9.6217, 125.9657, with an elevation of approximately 17.7 meters (58.1 feet) above sea level. This barangay is one of those situated at the municipal proper, so getting here from the port costs only 30 pesos by tricycle or motorcycle.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">ELVINA P. RUDELA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JERALD J. MANTE</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">EXCELSI S. GELSANO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">EHRROL C. SAVANDAL</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">LEONIDO R. PIAO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">AIDA M. GELSANO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">SYLVIA B. MONDRAGON</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">LORDINO S. LABE</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">JOLENA R. TAMAYO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">MARK STEPHENE L. CRUIZ</span>
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
            'headerTitle' => 'Rizal',
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
$pageBuilder->buildCustomPage($content, 'Rizal', 'Rizal - Barangay Details', $options);
?>