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
                                <img class="img-fluid w-100" src="/public/img/barangays/mabungahong-socorro.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Socorro Slogan followed by all barangays</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>San Roque is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 818. This represented 3.15% of the total population of Socorro.</p>
                            <p>The household population of San Roque in the 2015 Census was 825 broken down into 156 households or an average of 5.29 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in San Roque (1990-2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">414</td><td>66</td><td>6.27</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">405</td><td>65</td><td>6.23</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">448</td><td>79</td><td>5.67</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">786</td><td>136</td><td>5.78</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">837</td><td>146</td><td>5.73</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">825</td><td>156</td><td>5.29</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="/public/img/barangays/sohoton.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in San Roque is 10 to 14, with 107 individuals. Conversely, the age group with the lowest population is 80 and over, with 3 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 35.88% (296). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 60.36% (498). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 3.76% (31) in all. The computed Age Dependency Ratios mean that among the population of San Roque, there are 59 youth dependents to every 100 of the working age population; there are 6 aged/senior citizens to every 100 of the working population; and overall, there are 66 dependents (young and old-age) to every 100 of the working population. The median age of 21 indicates that half of the entire population of San Roque are aged less than 21 and the other half are over the age of 21.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="/public/img/tourist-spots/socorro-overlooking.jpg">
                            <p>The population of San Roque grew from 414 in 1990 to 818 in 2020, an increase of 404 people over the course of 30 years. The latest census figures in 2020 denote a negative growth rate of 0.18%, or a decrease of 7 people, from the previous population of 825 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>San Roque shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="/barangays/santa-cruz">Santa Cruz, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/songkoy">Songkoy, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/helene">Helene, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/rizal">Rizal, Socorro, Surigao del Norte</a></li>
                                <li><a href="/barangays/sudlon">Sudlon, Socorro, Surigao del Norte</a></li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31473.273722085036!2d125.90456084388596!3d9.581540809473351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e1dd58bf8ccb%3A0xb5e21b467e99e128!2sSan%20Roque%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718454995609!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>San Roque is located on the island of Bucas Grande at coordinates 9.6250, 125.9206, with an elevation of approximately 17.5 meters (57.4 feet) above sea level. This barangay is situated a distance from the port, and the travel fee to get there is approximately 80 pesos by tricycle or motorcycle.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">ENREX E. DELA PENA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ARNIL B. DAPAR</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ELVIE B. GAMBING</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">MARZAN A. BERBAL</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">FELIPE T. BERBAL</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">RODOLFO C. TOMINEZ JR.</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ROMULO I. JUANITE</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">HERMOSA M. SEMACIO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">JHON IAN B. RUAYA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">LELIT J. CURTINA</span>
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
            'headerTitle' => 'San Roque',
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
$pageBuilder->buildCustomPage($content, 'San Roque', 'San Roque - Barangay Details', $options);
?>