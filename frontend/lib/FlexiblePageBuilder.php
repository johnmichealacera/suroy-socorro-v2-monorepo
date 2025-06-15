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