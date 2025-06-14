<?php
// The Template and PageBuilder classes are already included by start_server.php
// Create page builder
$pageBuilder = new FlexiblePageBuilder();

// Example 1: Simple header
$headerTitle = "About Us";
$breadcrumbItems = [
    ["text" => "Home", "url" => "/"],
    ["text" => "About", "url" => null]
];

$content1 = '
    <div class="container-fluid py-5">
        <div class="container">
            <h2>About Us Page</h2>
            <p>This is an example of a simple header with basic breadcrumb navigation.</p>
        </div>
    </div>
';

// Example 2: Complex breadcrumb
$headerTitle2 = "Services";
$breadcrumbItems2 = [
    ["text" => "Home", "url" => "/"],
    ["text" => "Services", "url" => "/services.php"],
    ["text" => "Web Development", "url" => null]
];
$headerHeight2 = "350px";

$content2 = '
    <div class="container-fluid py-5">
        <div class="container">
            <h2>Services Page</h2>
            <p>This example shows a header with multiple breadcrumb levels and custom height.</p>
        </div>
    </div>
';

// Example 3: Custom background
$headerTitle3 = "Contact";
$breadcrumbItems3 = [
    ["text" => "Home", "url" => "/"],
    ["text" => "Contact", "url" => null]
];
$headerBackground3 = "page-header-alt"; // You can create custom CSS classes

$content3 = '
    <div class="container-fluid py-5">
        <div class="container">
            <h2>Contact Page</h2>
            <p>This example shows how to use a custom background class for the header.</p>
        </div>
    </div>
';

// Build the page with multiple examples
$pageBuilder->buildPageWithOrderedIncludes([
    ['file' => 'includes/header-section.php'],
    ['content' => $content1],
    ['content' => '<hr class="my-5">'],
    ['content' => $content2],
    ['content' => '<hr class="my-5">'],
    ['content' => $content3],
    ['file' => 'includes/footer.php']
], 'Header Examples', 'Examples of how to use the dynamic header component.');
?>

<style>
/* Example custom background class */
.page-header-alt {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('public/img/header-bg.jpg') center/cover no-repeat;
}
</style> 