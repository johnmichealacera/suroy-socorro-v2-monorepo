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
                <h3 class="display-4 text-white text-uppercase">Taruc Swimming Pool</h3>
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
                    <!-- Swimming Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="public/img/tourist-spots/taruc-swimming5.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Swimming pool teeming with lights in the night</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>A Swimming pool teemed with cool waters Source from multiple springs situated in the Scenic sitio tugop, Barangay Taruc Constructed through “Bayanihan System” In 1953  and Refurbished in 1997 is one of the great place to visit in Socorro.</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/tourist-spots/taruc-swimming.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Discover Taruc Swimming Pool, a hidden gem where you can dive into refreshing, crystal-clear waters at no cost. This public oasis features two pools—one for adults and a smaller one for kids—surrounded by lush greenery and swaying trees, creating a serene and invigorating atmosphere. Perfect for a budget-friendly day out, you can bring your own food, relax in cozy cottages, and enjoy the natural breeze in this beautiful, cost-free retreat.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/taruc-swimming6.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Swimming Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.8234928988654!2d125.96067197480663!3d9.610461879616787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e3c9b6b3a21b%3A0xd382b205dea9b75f!2sSocorro%20Swimming%20Pool!5e0!3m2!1sen!2sph!4v1718523833098!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Discover Barangay Taruc's Swimming Pool, a year-round gem accessible daily to the public. Located conveniently in the municipal area, you can reach it from the port for as little as 40 pesos. Enjoy a refreshing swim in pristine waters at no cost, but don't forget to pack snacks as there are no stores nearby. Take advantage of free cottage use—just remember to keep the area clean and respect the environment. Experience the warmth and hospitality of this serene destination firsthand!</p>
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