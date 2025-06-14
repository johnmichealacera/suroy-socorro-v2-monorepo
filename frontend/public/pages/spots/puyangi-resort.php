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
                <h3 class="display-4 text-white text-uppercase">Puyangi Beach Resort</h3>
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
                    <!-- Puyangi Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="public/img/tourist-spots/taruc-puyangi5.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Puyangi Beach Resort showing a number of coconut trees for shade</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Puyangi Beach boasts one of the longest stretches of white sand in Socorro</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" style="height: 300px" src="public/img/tourist-spots/taruc-puyangi1.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Escape to Puyangi Beach, a tranquil haven boasting one of Socorro's longest stretches of pristine white sand. With its 1.2 km of fine, light brown sand fringed by swaying palm trees, this serene spot offers a refreshing retreat from the crowds. Dive into the crystal-clear waters, perfect for swimming with its smooth, stone-free seabed. Relax under the natural shade of palm trees, enjoying the cool, refreshing breeze. Discover the untouched beauty of Puyangi Beach—Socorro's best-kept secret.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" style="height: 300px" src="public/img/tourist-spots/taruc-puyangi3.jpg">
                            <p>The easiest route to Puyangi Beach starts with a flight to Siargao Island, followed by a thrilling boat ride from Dapa port to Socorro, which takes about an hour. The journey across the open Pacific Ocean, with its strong waves and currents, adds an exciting touch for adventurous souls. Alternatively, you can board a boat from Pantalan Uno (Port 1) in Surigao City, taking a couple of hours to reach Socorro. For a shorter and more direct route, drive from Surigao City to Brgy. Hanyanggabon in Claver (approximately a 2-hour drive) and then take a quick boat ride to Socorro.</p>
                        </div>
                    </div>
                    <!-- Puyangi Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.9243924283824!2d125.96430787480654!3d9.601778879760733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e3ee42113563%3A0x6a0eecf9efd30440!2sPuyangi%20Beach%20Paradise!5e0!3m2!1sen!2sph!4v1718524445018!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Explore Puyangi Beach, nestled near the municipal center and open year-round for visitors. Accessible from the port for just 50 pesos, it's an affordable getaway for all. Enjoy the sun and sand at your leisure, making it an ideal spot for relaxation and recreation.</p>
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