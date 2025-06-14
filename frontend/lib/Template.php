<?php

/**
 * Template Engine for Socorro Suroy App
 * Handles common includes and provides a clean interface for page creation
 */
class Template {
    private $pageTitle;
    private $pageDescription;
    private $breadcrumbs = [];
    private $additionalCSS = [];
    private $additionalJS = [];
    private $bodyClass = '';
    private $includePath;
    
    public function __construct($includePath = null) {
        // Use absolute path if available, otherwise fallback to relative
        if (defined('INCLUDES_DIR')) {
            $this->includePath = INCLUDES_DIR . '/';
        } else {
            $this->includePath = $includePath ?: '../includes/';
        }
    }
    
    /**
     * Set page title
     */
    public function setTitle($title) {
        $this->pageTitle = $title;
        return $this;
    }
    
    /**
     * Set page description
     */
    public function setDescription($description) {
        $this->pageDescription = $description;
        return $this;
    }
    
    /**
     * Add breadcrumb
     */
    public function addBreadcrumb($text, $url = null) {
        $this->breadcrumbs[] = ['text' => $text, 'url' => $url];
        return $this;
    }
    
    /**
     * Set breadcrumbs
     */
    public function setBreadcrumbs($breadcrumbs) {
        $this->breadcrumbs = $breadcrumbs;
        return $this;
    }
    
    /**
     * Add additional CSS
     */
    public function addCSS($css) {
        $this->additionalCSS[] = $css;
        return $this;
    }
    
    /**
     * Add additional JavaScript
     */
    public function addJS($js) {
        $this->additionalJS[] = $js;
        return $this;
    }
    
    /**
     * Set body class
     */
    public function setBodyClass($class) {
        $this->bodyClass = $class;
        return $this;
    }
    
    /**
     * Render the head section
     */
    public function renderHead() {
        $pageTitle = $this->pageTitle;
        $pageDescription = $this->pageDescription;
        $additionalCSS = $this->additionalCSS;
        
        include $this->includePath . 'head.php';
    }
    
    /**
     * Render the topbar
     */
    public function renderTopbar() {
        include $this->includePath . 'topbar.php';
    }
    
    /**
     * Render the navbar
     */
    public function renderNavbar($pageTitle = null) {
        if ($pageTitle) {
            $this->pageTitle = $pageTitle;
        }
        include $this->includePath . 'navbar.php';
    }
    
    /**
     * Render breadcrumbs
     */
    public function renderBreadcrumbs() {
        if (empty($this->breadcrumbs)) {
            return;
        }
        
        echo '<div class="d-inline-flex text-white">';
        foreach ($this->breadcrumbs as $index => $breadcrumb) {
            if ($index > 0) {
                echo '<i class="fa fa-angle-double-right pt-1 px-3"></i>';
            }
            
            if ($breadcrumb['url']) {
                echo '<p class="m-0 text-uppercase"><a class="text-white" href="' . $breadcrumb['url'] . '">' . $breadcrumb['text'] . '</a></p>';
            } else {
                echo '<p class="m-0 text-uppercase">' . $breadcrumb['text'] . '</p>';
            }
        }
        echo '</div>';
    }
    
    /**
     * Render the footer
     */
    public function renderFooter() {
        include $this->includePath . 'footer.html';
    }
    
    /**
     * Render JavaScript includes
     */
    public function renderJS() {
        include $this->includePath . 'javascript.php';
        
        // Render additional JavaScript
        foreach ($this->additionalJS as $js) {
            echo $js;
        }
    }
    
    /**
     * Start the page (render head and body opening)
     */
    public function start($pageTitle = null) {
        if ($pageTitle) {
            $this->pageTitle = $pageTitle;
        }
        
        echo '<!DOCTYPE html>';
        echo '<html lang="en">';
        $this->renderHead();
        echo '<body' . ($this->bodyClass ? ' class="' . $this->bodyClass . '"' : '') . '>';
    }
    
    /**
     * End the page (render footer and close body/html)
     */
    public function end() {
        $this->renderFooter();
        echo '<!-- Back to Top -->';
        echo '<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>';
        $this->renderJS();
        echo '</body>';
        echo '</html>';
    }
    
    /**
     * Render a complete page with header and footer
     */
    public function render($content, $pageTitle = null, $breadcrumbs = []) {
        if ($pageTitle) {
            $this->pageTitle = $pageTitle;
        }
        
        if (!empty($breadcrumbs)) {
            $this->breadcrumbs = $breadcrumbs;
        }
        
        $this->start();
        $this->renderTopbar();
        $this->renderNavbar();
        
        if (!empty($this->breadcrumbs)) {
            echo '<div class="container-fluid page-header">';
            echo '<div class="container">';
            echo '<div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">';
            echo '<h3 class="display-4 text-white text-uppercase">' . $this->pageTitle . '</h3>';
            $this->renderBreadcrumbs();
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        
        echo $content;
        $this->end();
    }
    
    /**
     * Get asset URL
     */
    public function asset($path) {
        return '/' . ltrim($path, '/');
    }
    
    /**
     * Get include path
     */
    public function getIncludePath() {
        return $this->includePath;
    }
} 