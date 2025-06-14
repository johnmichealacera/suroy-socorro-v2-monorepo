<?php
/**
 * Dynamic Header Section Component
 * 
 * Usage:
 * <?php 
 *     $headerTitle = "Barangays";
 *     $breadcrumbItems = [
 *         ["text" => "Home", "url" => "/"],
 *         ["text" => "Information", "url" => null]
 *     ];
 *     include 'includes/header-section.php';
 * ?>
 */

// Default values if not provided
$headerTitle = $headerTitle ?? 'Page Title';
echo $headerTitle;
echo "<br>";
echo $breadcrumbItems;
$breadcrumbItems = $breadcrumbItems ?? [
    ["text" => "Home", "url" => "/"],
    ["text" => "Page", "url" => null]
];
$headerHeight = $headerHeight ?? '400px';
$headerBackground = $headerBackground ?? 'page-header'; // CSS class for background
?>

<!-- Header Start -->
<div class="container-fluid <?php echo $headerBackground; ?>">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: <?php echo $headerHeight; ?>">
            <h3 class="display-4 text-white text-uppercase"><?php echo htmlspecialchars($headerTitle); ?></h3>
            <div class="d-inline-flex text-white">
                <?php foreach ($breadcrumbItems as $index => $item): ?>
                    <?php if ($index > 0): ?>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <?php endif; ?>
                    
                    <?php if (isset($item['url']) && $item['url']): ?>
                        <p class="m-0 text-uppercase">
                            <a class="text-white" href="<?php echo htmlspecialchars($item['url']); ?>">
                                <?php echo htmlspecialchars($item['text']); ?>
                            </a>
                        </p>
                    <?php else: ?>
                        <p class="m-0 text-uppercase"><?php echo htmlspecialchars($item['text']); ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Header End --> 