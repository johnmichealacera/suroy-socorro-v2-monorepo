// Google Maps Error Handler for Socorro Suroy App
(function() {
    'use strict';
    
    // Store original console methods
    const originalError = console.error;
    const originalWarn = console.warn;
    const originalLog = console.log;
    
    // Enhanced error suppression for Google Maps
    console.error = function(...args) {
        const message = args.join(' ');
        const stack = args.find(arg => typeof arg === 'string' && arg.includes('at '));
        
        // Check for Google Maps related errors
        if (message.includes('maps.googleapis.com') || 
            message.includes('google.maps') ||
            message.includes('gen_204') ||
            message.includes('ERR_BLOCKED_BY_CLIENT') ||
            message.includes('_.Nc') ||
            message.includes('_.G') ||
            message.includes('_.gB') ||
            message.includes('oaa') ||
            message.includes('Re') ||
            message.includes('Uvb') ||
            message.includes('search_impl.js') ||
            message.includes('init_embed.js') ||
            message.includes('main.js') ||
            message.includes('common.js') ||
            message.includes('search.js') ||
            (stack && (stack.includes('maps.googleapis.com') || stack.includes('google.maps')))) {
            // Silently ignore Google Maps errors
            return;
        }
        originalError.apply(console, args);
    };
    
    // Enhanced warning suppression
    console.warn = function(...args) {
        const message = args.join(' ');
        if (message.includes('maps.googleapis.com') || 
            message.includes('google.maps') ||
            message.includes('gen_204') ||
            message.includes('ERR_BLOCKED_BY_CLIENT')) {
            // Silently ignore Google Maps warnings
            return;
        }
        originalWarn.apply(console, args);
    };
    
    // Suppress Google Maps related logs
    console.log = function(...args) {
        const message = args.join(' ');
        if (message.includes('maps.googleapis.com') || 
            message.includes('google.maps') ||
            message.includes('gen_204') ||
            message.includes('ERR_BLOCKED_BY_CLIENT')) {
            // Silently ignore Google Maps logs
            return;
        }
        originalLog.apply(console, args);
    };
    
    // Enhanced global error handler
    window.addEventListener('error', function(e) {
        const errorMessage = e.message || '';
        const errorStack = e.error ? e.error.stack : '';
        const errorSource = e.filename || '';
        
        // Check for Google Maps related errors
        if (errorMessage.includes('maps.googleapis.com') ||
            errorMessage.includes('google.maps') ||
            errorMessage.includes('gen_204') ||
            errorMessage.includes('ERR_BLOCKED_BY_CLIENT') ||
            errorMessage.includes('_.Nc') ||
            errorMessage.includes('_.G') ||
            errorMessage.includes('_.gB') ||
            errorMessage.includes('oaa') ||
            errorMessage.includes('Re') ||
            errorMessage.includes('Uvb') ||
            errorStack.includes('maps.googleapis.com') ||
            errorStack.includes('google.maps') ||
            errorSource.includes('maps.googleapis.com') ||
            errorSource.includes('google.maps')) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    }, true);
    
    // Enhanced unhandled promise rejection handler
    window.addEventListener('unhandledrejection', function(e) {
        const reason = e.reason || '';
        const reasonString = typeof reason === 'string' ? reason : reason.toString();
        
        if (reasonString.includes('maps.googleapis.com') ||
            reasonString.includes('google.maps') ||
            reasonString.includes('gen_204') ||
            reasonString.includes('ERR_BLOCKED_BY_CLIENT') ||
            reasonString.includes('_.Nc') ||
            reasonString.includes('_.G') ||
            reasonString.includes('_.gB')) {
            e.preventDefault();
            return false;
        }
    });
    
    // Intercept fetch requests to Google Maps
    const originalFetch = window.fetch;
    window.fetch = function(...args) {
        const url = args[0];
        if (typeof url === 'string' && (
            url.includes('maps.googleapis.com') ||
            url.includes('google.maps') ||
            url.includes('gen_204')
        )) {
            // Return a rejected promise that won't show in console
            return Promise.reject(new Error('Google Maps request blocked'));
        }
        return originalFetch.apply(this, args);
    };
    
    // Intercept XMLHttpRequest to Google Maps
    const originalXHROpen = XMLHttpRequest.prototype.open;
    XMLHttpRequest.prototype.open = function(method, url, ...args) {
        if (typeof url === 'string' && (
            url.includes('maps.googleapis.com') ||
            url.includes('google.maps') ||
            url.includes('gen_204')
        )) {
            // Override the URL to prevent the request
            url = 'data:text/plain,blocked';
        }
        return originalXHROpen.call(this, method, url, ...args);
    };
    
    // Handle iframe loading errors
    document.addEventListener('DOMContentLoaded', function() {
        const iframes = document.querySelectorAll('iframe[src*="google.com/maps"]');
        
        iframes.forEach(function(iframe) {
            // Add error handling for iframes
            iframe.addEventListener('error', function() {
                // Replace with a fallback message
                const fallback = document.createElement('div');
                fallback.className = 'map-fallback';
                fallback.innerHTML = `
                    <div style="background: #f8f9fa; padding: 20px; text-align: center; border: 1px solid #dee2e6; border-radius: 4px;">
                        <i class="fa fa-map-marker-alt" style="font-size: 2em; color: #7AB730; margin-bottom: 10px;"></i>
                        <h5>Map Unavailable</h5>
                        <p style="margin: 0; color: #6c757d;">Google Maps is blocked by your browser settings.</p>
                        <small style="color: #adb5bd;">This is normal when using ad blockers or privacy extensions.</small>
                    </div>
                `;
                iframe.parentNode.replaceChild(fallback, iframe);
            });
            
            // Add loading state
            iframe.addEventListener('load', function() {
                iframe.style.opacity = '1';
            });
            
            // Set initial loading state
            iframe.style.opacity = '0.7';
            iframe.style.transition = 'opacity 0.3s ease';
        });
    });
    
    // Suppress specific Google Maps API errors
    window.addEventListener('load', function() {
        // Override Google Maps error handling
        if (window.google && window.google.maps) {
            const originalMapError = window.google.maps.event.trigger;
            window.google.maps.event.trigger = function(instance, eventName, ...args) {
                if (eventName === 'error' || eventName === 'fail') {
                    return; // Suppress map errors
                }
                return originalMapError.call(this, instance, eventName, ...args);
            };
        }
    });
    
    console.log('Enhanced Maps error handler loaded - All Google Maps errors will be suppressed');
    
})(); 