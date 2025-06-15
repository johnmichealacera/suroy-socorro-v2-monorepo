<?php	
// Fetch tourist spots from API
$touristSpotsService = new TouristSpotsService();
$touristSpots = $touristSpotsService->getAllTouristSpots();
?>
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h1>Explore</h1>
        </div>
        <div class="row">
            <?php
            foreach ($touristSpots as $spot) {
                // Find thumbnail image
                $thumbnailImage = '/public/img/tourist-spots/default-spot.jpg'; // Default fallback
                if (!empty($spot['images'])) {
                    foreach ($spot['images'] as $image) {
                        if ($image['image_type'] === 'thumbnail') {
                            $thumbnailImage = $image['url'];
                            break;
                        }
                    }
                    // If no thumbnail found, use the first image as fallback
                    if ($thumbnailImage === '/public/img/tourist-spots/default-spot.jpg' && !empty($spot['images'])) {
                        $thumbnailImage = $spot['images'][0]['url'];
                    }
                }
                
                echo '<div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="' . $thumbnailImage . '" alt="' . $spot['name'] . '-' . $spot['short_description'] . '">
                        <a class="destination-overlay text-white text-decoration-none" href="spots/' . $spot['slug'] . '">
                            <h5 class="text-white">' . $spot['name'] . '</h5>
                            <span>' . $spot['short_description'] . '</span>
                        </a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</div>