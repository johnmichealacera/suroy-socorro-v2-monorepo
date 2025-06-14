<?php

/**
 * Flexible Page Builder for Socorro Suroy App
 * Extends PageBuilder with additional flexibility for custom includes and components
 */
class FlexiblePageBuilder extends PageBuilder {
    
    /**
     * Constructor - calls parent constructor to initialize template
     */
    public function __construct($includePath = '../includes/') {
        parent::__construct($includePath);
    }
    
    /**
     * Build page with custom components and includes
     */
    public function buildCustomPage($content, $title, $description = null, $options = []) {
        $this->template->setTitle($title);
        $this->template->setDescription($description);
        
        // Handle custom CSS
        if (isset($options['css'])) {
            foreach ($options['css'] as $css) {
                $this->template->addCSS($css);
            }
        }
        
        // Handle custom JavaScript
        if (isset($options['js'])) {
            foreach ($options['js'] as $js) {
                $this->template->addJS($js);
            }
        }
        
        $this->template->start();
        $this->template->renderTopbar();
        $this->template->renderNavbar();
        
        // Handle ordered includes (new enhanced feature)
        if (isset($options['includes'])) {
            foreach ($options['includes'] as $include) {
                if (isset($include['file']) && file_exists($include['file'])) {
                    // Extract any data passed to this include
                    if (isset($include['data']) && is_array($include['data'])) {
                        extract($include['data']);
                    }
                    include $include['file'];
                } elseif (isset($include['content'])) {
                    echo $include['content'];
                }
            }
        } else {
            // Legacy support for before_content and after_content
            // Render custom includes before content
            if (isset($options['before_content'])) {
                foreach ($options['before_content'] as $include) {
                    if (file_exists($include)) {
                        include $include;
                    } else {
                        echo "<!-- Warning: Include file not found: $include -->";
                    }
                }
            }
            
            echo $content;
            
            // Render custom includes after content
            if (isset($options['after_content'])) {
                foreach ($options['after_content'] as $include) {
                    if (file_exists($include)) {
                        include $include;
                    } else {
                        echo "<!-- Warning: Include file not found: $include -->";
                    }
                }
            }
        }
        
        $this->template->end();
    }
    
    /**
     * Build page with multiple sections
     */
    public function buildPageWithSections($sections, $title, $description = null, $options = []) {
        $this->template->setTitle($title);
        $this->template->setDescription($description);
        
        // Handle custom CSS/JS
        if (isset($options['css'])) {
            foreach ($options['css'] as $css) {
                $this->template->addCSS($css);
            }
        }
        
        if (isset($options['js'])) {
            foreach ($options['js'] as $js) {
                $this->template->addJS($js);
            }
        }
        
        $this->template->start();
        $this->template->renderTopbar();
        $this->template->renderNavbar();
        
        // Render each section
        foreach ($sections as $section) {
            if (isset($section['include'])) {
                if (file_exists($section['include'])) {
                    include $section['include'];
                } else {
                    echo "<!-- Warning: Include file not found: {$section['include']} -->";
                }
            } elseif (isset($section['content'])) {
                echo $section['content'];
            } else {
                echo "<!-- Warning: Section missing both 'include' and 'content' -->";
            }
        }
        
        $this->template->end();
    }
    
    /**
     * Build a page with conditional includes based on page type
     */
    public function buildConditionalPage($content, $title, $description = null, $pageType = 'default', $options = []) {
        // Add page-specific includes based on type
        switch ($pageType) {
            case 'barangay':
                $options['before_content'][] = 'includes/barangay-header.php';
                $options['after_content'][] = 'includes/barangay-footer.php';
                break;
            case 'tourist-spot':
                $options['before_content'][] = 'includes/spot-gallery.php';
                $options['after_content'][] = 'includes/spot-map.php';
                break;
            case 'delicacy':
                $options['before_content'][] = 'includes/delicacy-info.php';
                $options['after_content'][] = 'includes/recipe-section.php';
                break;
        }
        
        return $this->buildCustomPage($content, $title, $description, $options);
    }
    
    /**
     * Build a page with a sidebar
     */
    public function buildPageWithSidebar($mainContent, $sidebarContent, $title, $description = null, $options = []) {
        $this->template->setTitle($title);
        $this->template->setDescription($description);
        
        // Handle custom CSS/JS
        if (isset($options['css'])) {
            foreach ($options['css'] as $css) {
                $this->template->addCSS($css);
            }
        }
        
        if (isset($options['js'])) {
            foreach ($options['js'] as $js) {
                $this->template->addJS($js);
            }
        }
        
        $this->template->start();
        $this->template->renderTopbar();
        $this->template->renderNavbar();
        
        echo '<div class="container-fluid py-5">';
        echo '<div class="container py-5">';
        echo '<div class="row">';
        
        // Main content
        echo '<div class="col-lg-8">';
        echo $mainContent;
        echo '</div>';
        
        // Sidebar
        echo '<div class="col-lg-4 mt-5 mt-lg-0">';
        if (is_string($sidebarContent)) {
            echo $sidebarContent;
        } else {
            include $sidebarContent;
        }
        echo '</div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        $this->template->end();
    }
    
    /**
     * Build a page with breadcrumbs and custom includes
     */
    public function buildPageWithBreadcrumbs($content, $title, $description = null, $breadcrumbs = [], $options = []) {
        $this->template->setTitle($title);
        $this->template->setDescription($description);
        $this->template->setBreadcrumbs($breadcrumbs);
        
        // Handle custom CSS/JS
        if (isset($options['css'])) {
            foreach ($options['css'] as $css) {
                $this->template->addCSS($css);
            }
        }
        
        if (isset($options['js'])) {
            foreach ($options['js'] as $js) {
                $this->template->addJS($js);
            }
        }
        
        return $this->template->render($content);
    }
    
    /**
     * Add a custom component to the page
     */
    public function addComponent($componentPath, $data = []) {
        if (file_exists($componentPath)) {
            // Extract variables for use in the component
            extract($data);
            include $componentPath;
        } else {
            echo "<!-- Warning: Component not found: $componentPath -->";
        }
    }
    
    /**
     * Build a page with multiple components
     */
    public function buildPageWithComponents($content, $title, $description = null, $components = [], $options = []) {
        $this->template->setTitle($title);
        $this->template->setDescription($description);
        
        // Handle custom CSS/JS
        if (isset($options['css'])) {
            foreach ($options['css'] as $css) {
                $this->template->addCSS($css);
            }
        }
        
        if (isset($options['js'])) {
            foreach ($options['js'] as $js) {
                $this->template->addJS($js);
            }
        }
        
        $this->template->start();
        $this->template->renderTopbar();
        $this->template->renderNavbar();
        
        // Render components and content
        foreach ($components as $component) {
            if (isset($component['position']) && $component['position'] === 'before') {
                $this->addComponent($component['path'], $component['data'] ?? []);
            }
        }
        
        echo $content;
        
        foreach ($components as $component) {
            if (!isset($component['position']) || $component['position'] === 'after') {
                $this->addComponent($component['path'], $component['data'] ?? []);
            }
        }
        
        $this->template->end();
    }
    
    /**
     * Build a page with ordered includes at specific positions
     */
    public function buildPageWithOrderedIncludes($content, $title, $description = null, $includes = [], $options = []) {
        $this->template->setTitle($title);
        $this->template->setDescription($description);
        
        // Handle custom CSS/JS
        if (isset($options['css'])) {
            foreach ($options['css'] as $css) {
                $this->template->addCSS($css);
            }
        }
        
        if (isset($options['js'])) {
            foreach ($options['js'] as $js) {
                $this->template->addJS($js);
            }
        }
        
        $this->template->start();
        $this->template->renderTopbar();
        $this->template->renderNavbar();
        
        // Render includes in order
        foreach ($includes as $include) {
            if (isset($include['file']) && file_exists($include['file'])) {
                // Extract any data passed to this include
                if (isset($include['data']) && is_array($include['data'])) {
                    extract($include['data']);
                }
                include $include['file'];
            } elseif (isset($include['content'])) {
                echo $include['content'];
            }
        }
        
        $this->template->end();
    }
} 