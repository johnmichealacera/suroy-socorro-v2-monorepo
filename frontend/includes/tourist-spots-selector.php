<?php
// Fetch tourist spots from API
$touristSpotsService = new TouristSpotsService();
$touristSpots = $touristSpotsService->getAllTouristSpots();
// Generate destination options dynamically
$destinationOptions = '';
if (!empty($touristSpots)) {
    foreach ($touristSpots as $spot) {
        $destinationOptions .= '<option value="' . htmlspecialchars($spot['slug']) . '">' . htmlspecialchars($spot['name']) . '</option>';
    }
} else {
    // Fallback options if API is not available
    $destinationOptions = '
        <option value="socorro-beach">Socorro Beach</option>
        <option value="mount-socorro">Mount Socorro</option>
        <option value="socorro-church">Socorro Church</option>
        <option value="socorro-waterfall">Socorro Waterfall</option>
        <option value="socorro-lighthouse">Socorro Lighthouse</option>
    ';
}

?>

<div class="container-fluid booking mt-5">
    <div class="container">
        <div class="bg-light shadow" style="padding: 30px;">
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="col-md-10">
                    <div class="row">
                        <div class="mb-3 mb-md-0" style="width: 100%">
                        <select id="destinationSelect" class="custom-select px-4" style="height: 47px;">
                            <option value="" selected disabled>Destination</option>
                            <?php echo $destinationOptions; ?>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button id="submitButton" class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
    // Add click event listener to the submit button
    document.getElementById('submitButton').addEventListener('click', function() {
        // Get the selected value from the dropdown
        var selectedValue = document.getElementById('destinationSelect').value;
        if (selectedValue) {
            window.location.href = `/spots/${selectedValue}`;
        }
    });
</script>