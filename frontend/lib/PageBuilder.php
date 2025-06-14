<?php

/**
 * Page Builder for Socorro Suroy App
 * Provides convenient methods for building different types of pages
 */
class PageBuilder {
    protected $template;
    
    public function __construct($includePath = '../includes/') {
        $this->template = new Template($includePath);
    }
    
    /**
     * Build a simple page with header and footer
     */
    public function buildPage($content, $title, $description = null, $breadcrumbs = []) {
        return $this->template
            ->setTitle($title)
            ->setDescription($description)
            ->setBreadcrumbs($breadcrumbs)
            ->render($content);
    }
    
    /**
     * Build a page with custom header (no breadcrumbs)
     */
    public function buildCustomPage($content, $title, $description = null) {
        $this->template->setTitle($title);
        $this->template->setDescription($description);
        
        $this->template->start();
        $this->template->renderTopbar();
        $this->template->renderNavbar();
        echo $content;
        $this->template->end();
    }
    
    /**
     * Build a barangay page
     */
    public function buildBarangayPage($content, $barangayName, $description = null) {
        $breadcrumbs = [
            ['text' => 'Home', 'url' => '../../public/'],
            ['text' => 'Barangays', 'url' => '../../public/barangays.php'],
            ['text' => $barangayName, 'url' => null]
        ];
        
        return $this->buildPage($content, $barangayName, $description, $breadcrumbs);
    }
    
    /**
     * Build a tourist spot page
     */
    public function buildSpotPage($content, $spotName, $description = null) {
        $breadcrumbs = [
            ['text' => 'Home', 'url' => '../../public/'],
            ['text' => 'Tourist Spots', 'url' => '../../public/tourist-spots.php'],
            ['text' => $spotName, 'url' => null]
        ];
        
        return $this->buildPage($content, $spotName, $description, $breadcrumbs);
    }
    
    /**
     * Build a main page (like index, about, contact)
     */
    public function buildMainPage($content, $title, $description = null) {
        $breadcrumbs = [
            ['text' => 'Home', 'url' => '/'],
            ['text' => $title, 'url' => null]
        ];
        
        return $this->buildPage($content, $title, $description, $breadcrumbs);
    }
    
    /**
     * Get the template instance for advanced usage
     */
    public function getTemplate() {
        return $this->template;
    }
    
    /**
     * Create a new template instance with different include path
     */
    public function createTemplate($includePath) {
        return new Template($includePath);
    }
} 