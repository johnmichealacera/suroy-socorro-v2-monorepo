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
                <h3 class="display-4 text-white text-uppercase">Salog Busay</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="tourist-spots.php">Tourist Spots</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Detail</p>
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
                    <!-- Sunrise Peak Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="public/img/tourist-spots/salog-busay7.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Waterfalls circled with trees and plants</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Salog Busay is where waterfalls and tranquility converge</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/tourist-spots/salog-busay5.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Nestled in the heart of Salog, Salog Busay is a haven where nature's serenity meets cascading waterfalls. This hidden gem invites residents and visitors alike to bask in the cool embrace of its refreshing waters while soaking in breathtaking views. A cozy cottage awaits, free for all to use, offering respite amidst the lush greenery and towering trees. With no admission fee, Salog Busay promises an affordable escape into nature's embrace.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/salog-busay4.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Sunrise Peak Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37414.2866298854!2d125.91779418215425!3d9.707269295105867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303fd0bdfaa4b73%3A0xb80c695d6a68954d!2sSalog%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718526060022!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Discover Salog Busay, where tranquility meets nature's grandeur! For approximately 160 pesos from the port, unwind amidst majestic waterfalls and pristine landscapes. Don't forget to pack your own snacks as there are no stores nearby—just pure relaxation and breathtaking natural beauty awaits!</p>
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