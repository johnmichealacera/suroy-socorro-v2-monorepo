# Dynamic Header Component Usage Guide

## Overview

The dynamic header component (`includes/header-section.php`) allows you to create reusable page headers with customizable titles, breadcrumbs, heights, and backgrounds.

## Basic Usage

### 1. Pass Header Data to Include

The header variables are passed directly to the include file using the `data` parameter:

```php
[
    'file' => 'includes/header-section.php',
    'data' => [
        'headerTitle' => 'Your Page Title',
        'breadcrumbItems' => [
            ["text" => "Home", "url" => "/"],
            ["text" => "Section", "url" => "/section.php"],
            ["text" => "Current Page", "url" => null] // null for current page
        ],
        'headerHeight' => '350px', // Optional
        'headerBackground' => 'page-header-alt' // Optional
    ]
]
```

### 2. Include the Header Component

Use the `FlexiblePageBuilder` to include the header with the correct method signature:

```php
$pageBuilder->buildPageWithOrderedIncludes(
    $content,           // Your page content
    $pageTitle,         // Page title for SEO
    $pageDescription,   // Page description for SEO
    [                   // Array of includes in order
        [
            'file' => 'includes/header-section.php',
            'data' => [
                'headerTitle' => 'Your Page Title',
                'breadcrumbItems' => [
                    ["text" => "Home", "url" => "/"],
                    ["text" => "Current Page", "url" => null]
                ]
            ]
        ],
        ['file' => 'includes/footer.php']
    ]
);
```

## Examples

### Simple Header
```php
[
    'file' => 'includes/header-section.php',
    'data' => [
        'headerTitle' => 'About Us',
        'breadcrumbItems' => [
            ["text" => "Home", "url" => "/"],
            ["text" => "About", "url" => null]
        ]
    ]
]
```

### Complex Breadcrumb
```php
[
    'file' => 'includes/header-section.php',
    'data' => [
        'headerTitle' => 'Web Development Services',
        'breadcrumbItems' => [
            ["text" => "Home", "url" => "/"],
            ["text" => "Services", "url" => "/services.php"],
            ["text" => "Web Development", "url" => null]
        ]
    ]
]
```

### Custom Height and Background
```php
[
    'file' => 'includes/header-section.php',
    'data' => [
        'headerTitle' => 'Contact Us',
        'breadcrumbItems' => [
            ["text" => "Home", "url" => "/"],
            ["text" => "Contact", "url" => null]
        ],
        'headerHeight' => '500px',
        'headerBackground' => 'page-header-contact'
    ]
]
```

## Breadcrumb Structure

Each breadcrumb item is an array with:
- `text`: The display text
- `url`: The link URL (use `null` for current page)

```php
'breadcrumbItems' => [
    ["text" => "Home", "url" => "/"],
    ["text" => "Category", "url" => "/category.php"],
    ["text" => "Subcategory", "url" => "/category/subcategory.php"],
    ["text" => "Current Page", "url" => null]
]
```

## Custom Background Classes

You can create custom CSS classes for different header backgrounds:

```css
.page-header-contact {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                url('public/img/contact-header.jpg') center/cover no-repeat;
}

.page-header-services {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                url('public/img/services-header.jpg') center/cover no-repeat;
}
```

## Complete Page Example

```php
<?php
// The Template and PageBuilder classes are already included by start_server.php
$pageBuilder = new FlexiblePageBuilder();

// Page content
$content = '
    <div class="container-fluid py-5">
        <div class="container">
            <h2>Our Services</h2>
            <p>This is the main content of your page.</p>
        </div>
    </div>
';

// Build the page with correct method signature
$pageBuilder->buildPageWithOrderedIncludes(
    $content, 
    'Our Services', 
    'Discover the services we offer.',
    [
        [
            'file' => 'includes/header-section.php',
            'data' => [
                'headerTitle' => 'Our Services',
                'breadcrumbItems' => [
                    ["text" => "Home", "url" => "/"],
                    ["text" => "Services", "url" => null]
                ]
            ]
        ],
        ['file' => 'includes/footer.php']
    ]
);
?>
```

## Method Signature

The correct method signature for `buildPageWithOrderedIncludes` is:

```php
buildPageWithOrderedIncludes(
    $content,           // string - Your page content
    $title,             // string - Page title for SEO
    $description,       // string|null - Page description for SEO
    $includes,          // array - Array of includes to render
    $options            // array - Optional configuration
)
```

## Include Structure

Each include in the array can have:
- `file`: Path to the include file
- `data`: Array of variables to pass to the include (optional)
- `content`: Direct content to output (alternative to file)

```php
[
    'file' => 'includes/header-section.php',
    'data' => [
        'headerTitle' => 'Page Title',
        'breadcrumbItems' => [...]
    ]
]
```

## Benefits

1. **DRY Principle**: No more duplicate header code
2. **Consistency**: All pages use the same header structure
3. **Maintainability**: Changes to header design only need to be made in one place
4. **Flexibility**: Easy to customize for different pages
5. **SEO Friendly**: Proper breadcrumb structure for search engines
6. **Variable Scope**: Header variables are properly scoped to each include

## Migration Guide

To migrate existing pages:

1. Remove the hardcoded header HTML
2. Update the page builder call to use `buildPageWithOrderedIncludes` with correct parameters
3. Pass header variables using the `data` parameter
4. Test the page to ensure everything works correctly

## Files Updated

- `includes/header-section.php` - The dynamic header component
- `lib/FlexiblePageBuilder.php` - Enhanced to support data passing to includes
- `public/barangays.php` - Updated to use dynamic header with data passing
- `public/tourist-spots.php` - Updated to use dynamic header with data passing
- `public/example-header.php` - Example usage demonstration 