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
                <h3 class="display-4 text-white text-uppercase">Sohoton</h3>
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
                                <img class="img-fluid w-100" src="public/img/tourist-spots/sohoton3.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Group of tourists enjoying a dip in the clear seawaters</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Nestled amidst lush valleys, rolling hilltops, and powdery white beaches, Sohoton Cove is the crown jewel of the island. Embark on an exhilarating journey aboard a pump boat to uncover its hidden treasures. Navigate crystal-clear waters teeming with stingless jellyfish, a mesmerizing sight you won't want to miss.</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/tourist-spots/sohoton.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Delve into the mysterious allure of Sohoton's captivating caves, each whispering tales of ancient wonders. For an aerial perspective, soar above with a drone and witness panoramic views of the surrounding islets, painting a picture-perfect backdrop. Sohoton Cove awaits, promising an unforgettable adventure through nature's pristine splendor.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/jellyfish.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Brangay Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Barangay Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.9511435880863!2d125.91393697480662!3d9.59947547979884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e1fb7f4a485b%3A0x5b425b9f99abd0ec!2sSohoton%20Cove!5e0!3m2!1sen!2sph!4v1718525537594!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Enjoy a scenic pumpboat ride from Hayanggabon port, inclusive of entrance fees, life vests, and the services of a knowledgeable tour guide. Some services offer 8 to 12 person for only Php 1,700. Explore breathtaking spots like Sohoton Cove, Hagukan Cove, Jellyfish Sanctuary, Crystal Cave, Tundan Cave, and Bulitas Cave. Book your adventure today and immerse yourself in the natural beauty of Sohoton!</p>
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