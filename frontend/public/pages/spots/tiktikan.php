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
                <h3 class="display-4 text-white text-uppercase">Tiktikan</h3>
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
                                <img class="img-fluid w-100" src="public/img/tourist-spots/tiktikan2.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Entrance sign of the resort</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>The Philippines' Surigao del Norte province's Bucas Grande island is widely known for its hidden lagoon, Tiktikan Lagoon. In close proximity to Sohoton Cove, Tiktikan Lagoon is a 2-hectare lagoon. It is a portion of Bucas Grande and has serene blue waters encircled by a thick green limestone forest. </p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="public/img/tourist-spots/tiktikan4.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Tiktikan Lagoon is a tiny, shallow lake that lies a hundred meters into the karst region. Its water rises with the high tide and falls with the low tide, which is typical for this region of the Philippines. Additionally, it has a connection to the ocean via an underground passageway that penetrates deep into the ground before emerging into an adjacent lagoon. There are a lot of activities you can do in this lagoon. You can swim in the crystal-clear waters that surround this spot or engage in thrilling pursuits like slides, ledge leaping, and paddleboarding.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="public/img/tourist-spots/tiktikan1.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Brangay Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Barangay Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.83362295342!2d125.90940507480657!3d9.609590479631228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330158a8f0f82687%3A0xf77cf3f0abe36a0a!2sTiktikan%20Lagoon%20Cottages!5e0!3m2!1sen!2sph!4v1718523142722!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Tiktikan Lagoon and Resort is a year-round destination open daily to the public. Accessing this beautiful location requires a boat ride, with ample assistance available from the local tourism office and residents. Typically, the cost to reach the lagoon ranges from 500 to 1000 pesos per group. Additionally, there are lodging options such as rest houses available for rent starting from as low as 1500 pesos.</p>
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