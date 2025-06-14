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
                <h3 class="display-4 text-white text-uppercase">Magkahuyog Falls</h3>
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
                    <!-- Tiktikan Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="public/img/tourist-spots/magkahuyog5.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Great view of magkahuyog falls</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Discover Magkahuyog Falls: Socorro's Natural Gem</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/tourist-spots/magkahuyog7.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Experience the breathtaking beauty of Magkahuyog Falls, a place where nature's splendor comes alive. Located in Socorro, this stunning waterfall is a source of pride for the community, much like Salog Busay. The cool, cascading waters provide the perfect setting for a refreshing escape, surrounded by verdant trees and panoramic mountain views. With a cozy, free-to-use cottage, Magkahuyog Falls offers an idyllic spot for relaxation and adventure, all at no cost. Come and immerse yourself in the enchanting charm of Socorro's natural wonder.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/magkahuyog.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Brangay Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Barangay Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62934.64001951058!2d125.84503089796861!3d9.64553586880121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e284fb997eab%3A0xe699892e959dabdc!2sPamosaingan%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718527072226!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Explore Magkahuyog Falls, where nature's serenity awaits! Journey from the port for approximately 130 pesos and immerse yourself in the beauty of cascading waterfalls and untouched landscapes. Remember to bring your own snacks, as there are no stores nearby. Experience pure relaxation amidst the tranquil surroundings and breathtaking natural splendor!</p>
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