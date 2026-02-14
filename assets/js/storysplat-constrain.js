/**
 * Prevent StorySplat viewer from going fullscreen
 * Keep it constrained within the page layout
 */
(function() {
    'use strict';

    // Prevent fullscreen API calls
    if (document.documentElement.requestFullscreen) {
        const originalRequestFullscreen = Element.prototype.requestFullscreen;
        Element.prototype.requestFullscreen = function() {
            // Block fullscreen for StorySplat containers
            if (this.classList.contains('storysplat-viewer-container') ||
                this.closest('.storysplat-viewer-container') ||
                this.closest('.storysplat-embed')) {
                console.log('[StorySplat] Fullscreen mode prevented - viewer constrained to page layout');
                return Promise.resolve();
            }
            return originalRequestFullscreen.apply(this, arguments);
        };
    }

    // Also handle webkit/moz prefixed versions
    if (document.documentElement.webkitRequestFullscreen) {
        const originalWebkitRequestFullscreen = Element.prototype.webkitRequestFullscreen;
        Element.prototype.webkitRequestFullscreen = function() {
            if (this.classList.contains('storysplat-viewer-container') ||
                this.closest('.storysplat-viewer-container') ||
                this.closest('.storysplat-embed')) {
                console.log('[StorySplat] Fullscreen mode prevented - viewer constrained to page layout');
                return Promise.resolve();
            }
            return originalWebkitRequestFullscreen.apply(this, arguments);
        };
    }

    // Monitor for size changes and keep constrained
    document.addEventListener('storysplat:ready', function(e) {
        const container = e.target;

        // Force container constraints
        const observer = new MutationObserver(function() {
            if (container.style.position === 'fixed' ||
                container.style.position === 'absolute') {
                container.style.position = 'relative';
                container.style.width = '100%';
                container.style.maxWidth = '1220px';
                container.style.left = '0';
                container.style.top = '0';
                container.style.transform = 'none';
            }
        });

        observer.observe(container, {
            attributes: true,
            attributeFilter: ['style', 'class']
        });
    });

})();
