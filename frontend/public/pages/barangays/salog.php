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
                <h3 class="display-4 text-white text-uppercase">Salog</h3>
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
                                <img class="img-fluid w-100" src="public/img/barangays/salog-falls.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Falls where people go to take pictures</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Salog is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 1,001. This represented 3.86% of the total population of Socorro.</p>
                            <p>The household population of Salog in the 2015 Census was 930 broken down into 163 households or an average of 5.71 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in Salog (1990‑2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">828</td><td>127</td><td>6.52</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">659</td><td>115</td><td>5.73</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">731</td><td>124</td><td>5.90</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">621</td><td>110</td><td>5.65</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">736</td><td>138</td><td>5.33</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">930</td><td>163</td><td>5.71</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/barangays/salog-falls1.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Salog is 15 to 19, with 114 individuals. Conversely, the age group with the lowest population is 80 and over, with 5 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 35.16% (327). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 60.97% (567). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 3.87% (36) in all. The computed Age Dependency Ratios mean that among the population of Salog, there are 58 youth dependents to every 100 of the working age population; there are 6 aged/senior citizens to every 100 of the working population; and overall, there are 64 dependents (young and old-age) to every 100 of the working population. The median age of 21 indicates that half of the entire population of Salog are aged less than 21 and the other half are over the age of 21.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/socorro-overlooking.jpg">
                            <p>The population of Salog grew from 828 in 1990 to 1,001 in 2020, an increase of 173 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 1.56%, or an increase of 71 people, from the previous population of 930 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Salog shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="honrado.php">Honrado, Socorro, Surigao del Norte</a></li>
                                <li><a href="pamosaingan.php">Pamosaingan, Socorro, Surigao del Norte</a></li>
                                <li><a href="sering.php">Sering, Socorro, Surigao del Norte</a></li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62923.05688263758!2d125.90108610465604!3d9.707387092214388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303fd0bdfaa4b73%3A0xb80c695d6a68954d!2sSalog%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718454422759!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Salog is located on the beautiful island of Bucas Grande at coordinates 9.7073, 125.9411, with an elevation of approximately 73.9 meters (242.5 feet) above sea level. This barangay is a bit far from the municipal proper, so the travel fee is about 100 pesos by tricycle or motorcycle.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">DEONITA G. SANGCO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ROGELIO D. CINCO JR.</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ROBERTO E. PLAZA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">RYAN E. ALCALA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JULIET C. OMAS-AS</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">EDNA L. CINCO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">GENALYN C. DIGAL</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">CATHERINE B. BAYETA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">ALEXCHO C. CONSIGNA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">JAYREL P. ELANDAG</span>
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