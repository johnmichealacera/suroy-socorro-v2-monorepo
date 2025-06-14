// Google Maps API Preventer - Loads before Google Maps API
(function() {
    'use strict';
    
    // Check if ad blocker is likely active
    function isAdBlockerActive() {
        // Test for common ad blocker indicators
        const testAd = document.createElement('div');
        testAd.innerHTML = '&nbsp;';
        testAd.className = 'adsbox';
        testAd.style.position = 'absolute';
        testAd.style.left = '-9999px';
        testAd.style.top = '-9999px';
        document.body.appendChild(testAd);
        
        const isBlocked = testAd.offsetHeight === 0;
        document.body.removeChild(testAd);
        
        return isBlocked;
    }
    
    // Prevent Google Maps API from loading if ad blocker is active
    if (isAdBlockerActive()) {
        console.log('Ad blocker detected - Preventing Google Maps API loading');
        
        // Override script loading
        const originalCreateElement = document.createElement;
        document.createElement = function(tagName) {
            const element = originalCreateElement.call(document, tagName);
            
            if (tagName.toLowerCase() === 'script') {
                const originalSetAttribute = element.setAttribute;
                element.setAttribute = function(name, value) {
                    if (name === 'src' && (
                        value.includes('maps.googleapis.com') ||
                        value.includes('google.maps') ||
                        value.includes('maps-api-3')
                    )) {
                        // Replace with a dummy script
                        value = 'data:text/javascript,console.log("Google Maps API blocked by ad blocker");';
                    }
                    return originalSetAttribute.call(this, name, value);
                };
            }
            
            return element;
        };
        
        // Override iframe src setting
        const originalIframeSetAttribute = HTMLIFrameElement.prototype.setAttribute;
        HTMLIFrameElement.prototype.setAttribute = function(name, value) {
            if (name === 'src' && value.includes('google.com/maps')) {
                // Replace with a fallback
                const fallback = document.createElement('div');
                fallback.className = 'map-fallback';
                fallback.innerHTML = `
                    <div style="background: #f8f9fa; padding: 20px; text-align: center; border: 1px solid #dee2e6; border-radius: 4px;">
                        <i class="fa fa-map-marker-alt" style="font-size: 2em; color: #7AB730; margin-bottom: 10px;"></i>
                        <h5>Map Unavailable</h5>
                        <p style="margin: 0; color: #6c757d;">Google Maps is blocked by your ad blocker.</p>
                        <small style="color: #adb5bd;">This is normal when using ad blockers or privacy extensions.</small>
                    </div>
                `;
                
                // Replace the iframe with fallback
                if (this.parentNode) {
                    this.parentNode.replaceChild(fallback, this);
                    return;
                }
            }
            return originalIframeSetAttribute.call(this, name, value);
        };
        
        // Block Google Maps API requests
        const originalFetch = window.fetch;
        window.fetch = function(...args) {
            const url = args[0];
            if (typeof url === 'string' && (
                url.includes('maps.googleapis.com') ||
                url.includes('google.maps') ||
                url.includes('gen_204')
            )) {
                console.log('Blocked Google Maps API request:', url);
                return Promise.reject(new Error('Google Maps API blocked'));
            }
            return originalFetch.apply(this, args);
        };
        
        // Block XMLHttpRequest to Google Maps
        const originalXHROpen = XMLHttpRequest.prototype.open;
        XMLHttpRequest.prototype.open = function(method, url, ...args) {
            if (typeof url === 'string' && (
                url.includes('maps.googleapis.com') ||
                url.includes('google.maps') ||
                url.includes('gen_204')
            )) {
                console.log('Blocked Google Maps XHR request:', url);
                url = 'data:text/plain,blocked';
            }
            return originalXHROpen.call(this, method, url, ...args);
        };
    }
    
    console.log('Google Maps API preventer loaded');
    
})(); 