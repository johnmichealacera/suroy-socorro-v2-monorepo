<head>
    <meta charset="utf-8">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>E-SUROY SOCORRO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="<?php echo isset($pageDescription) ? $pageDescription : 'Explore the rich cultural delicacies, barangays and tourist spots of Socorro.'; ?>" name="description">
    <meta property="og:url" content="https://E-SUROY-sa-socorro.onrender.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'E-SUROY sa Socorro'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Explore the rich cultural delicacies, barangays and tourist spots of Socorro.'; ?>">
    <meta property="og:image" content="https://live.staticflickr.com/65535/53794506071_0f0f92939b_c.jpg">

    <!-- Favicon -->
    <link href="public/img/socorro-logo.png" rel="icon">
    <link rel="icon" href="/favicon.png" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet (Compiled from SCSS) -->
<!-- Maps Fallback Styles -->
<link href="public/css/maps-fallback.css" rel="stylesheet">
    <link href="public/css/style.scss.css" rel="stylesheet">
    
    <?php if (isset($additionalCSS) && !empty($additionalCSS)): ?>
        <?php foreach ($additionalCSS as $css): ?>
            <?php echo $css; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</head>