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
                <h3 class="display-4 text-white text-uppercase">Ecopark Grande</h3>
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
                                <img class="img-fluid w-100" src="public/img/tourist-spots/ecopark1.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">View of the cottage and swimming pool</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Ecopark Grande is a newly opened destination for people who are fond of camping, relaxing with nature and other activities.</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/tourist-spots/ecopark3.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Enjoy the coolness, freshness of water and the abundance of oxygen from the forest, appreciate the aesthetic beauty of the environment of this new haven among nature’s enthusiasts, the “GRANDE ECO-PARK RESORT”, located at Sitio Carbon, Kapihan Road, Barangay Del Pilar, Socorro, Surigao del Norte.
                            Ideal venue for the following activities:
                            1. Swimming
                            2. Team Building
                            3. Family Bonding and Picnic
                            4. Seminars and Workshops
                            5. Hiking and camping inside the clean forest
                            6. Viewing and relaxing
                            7. Other activities
                            Facilities:
                            - 2 Swimming Pools
                            - 5 Cottages
                            - 1 Coffee Shop and Restaurant
                            - Rooms for the Guests with CR for Male and Female
                            - Garden and Landscaping
                            - 12 hectares exotic and endemic forest camping area</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/ecopark5.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Sunrise Peak Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26459.591137854208!2d125.97399237406565!3d9.660373061472422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e33f45d6e7fb%3A0xf6acd27df9dc36f!2sGarden%20Eco-Park%20Resort!5e0!3m2!1sen!2sph!4v1718527744665!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Explore Grande Ecopark in Barangay Del Pilar, your gateway to relaxation and adventure! Journey there with ease for just 80 pesos and dive into a refreshing swim in the stunning pool for an entrance fee of only 50 pesos. Looking to extend your stay? Enjoy affordable lodging rooms starting at 1500 pesos, ensuring an unforgettable overnight escape amidst nature's beauty.</p>
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