<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php'); ?>

<body>
    <!-- Topbar Start -->
    <?php include_once('topbar.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php 
        $pageTitle = "single";
        include_once("navbar.php"); 
    ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Navarro</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="barangays.php">Barangays</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Barangay Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Barangay Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="public/img/barangays/navarro-port.jpeg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Image above Socorro port located in Barangay Navarro</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Navarro, formerly Poblacion, is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 2,822. This represented 10.88% of the total population of Socorro.</p>
                            <p>The household population of Navarro in the 2015 Census was 3,784 broken down into 747 households or an average of 5.07 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in Navarro (1990‑2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">3,422</td><td>537</td><td>6.37</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">4,172</td><td>724</td><td>5.76</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">2,390</td><td>400</td><td>5.98</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">2,742</td><td>481</td><td>5.70</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">3,593</td><td>669</td><td>5.37</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">3,784</td><td>747</td><td>5.07</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/barangays/navarro-soemco.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Navarro is 15 to 19, with 485 individuals. Conversely, the age group with the lowest population is 80 and over, with 31 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 31.21% (1,181). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 63.37% (2,398). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 5.42% (205) in all. The computed Age Dependency Ratios mean that among the population of Navarro, there are 49 youth dependents to every 100 of the working age population; there are 9 aged/senior citizens to every 100 of the working population; and overall, there are 58 dependents (young and old-age) to every 100 of the working population. The median age of 23 indicates that half of the entire population of Navarro are aged less than 23 and the other half are over the age of 23.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/socorro-overlooking.jpg">
                            <p>The population of Navarro fell from 3,430 in 1990 to 2,822 in 2020, a decrease of 608 people over the course of 30 years. The latest census figures in 2020 denote a negative growth rate of 5.99%, or a decrease of 962 people, from the previous population of 3,784 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Navarro shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="nueva-estrella.php">Nueva Estrella, Socorro, Surigao del Norte</a></li>
                                <li><a href="del-pilar.php">Del Pilar, Socorro, Surigao del Norte</a></li>
                                <li><a href="songkoy.php">Songkoy, Socorro, Surigao del Norte</a></li>
                                <li><a href="albino-taruc.php">Albino Taruc, Socorro, Surigao del Norte</a></li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31469.906677818486!2d125.92686997431643!3d9.6177842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e3b68bd0dde7%3A0xd0e9ae8ef3253205!2sNavarro%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1718443318172!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Navarro is located on the charming island of Bucas Grande at coordinates 9.6191, 125.9644, with an elevation of approximately 12.3 meters (40.4 feet) above sea level. The port is conveniently situated in this barangay, so getting to the market or barangay hall costs only 10 to 20 pesos by tricycle or motorcycle.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">ANDRES P. RUAYA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">SHA MARIE V. GALO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">EDGARDO C. ALCALA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ROBERTO S. CONSIGNA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ROLDAN C. DIZON</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JEROLD GLEN M. DIZON</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">DYNSIE M. CONIATO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ANDREA C. LASALA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">CHRISTOPHER L. TARUC</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">SHERRYLOU A. GALO</span>
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
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php include_once("footer.html"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php include_once("javascript.php"); ?>
</body>

</html>