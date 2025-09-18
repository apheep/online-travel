<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'Online Travel')</title>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<script>
    // Global Page Enter Fade-In (applies to all pages)
    (function(){
        function addClass(el, cls){ if (el && !el.classList.contains(cls)) el.classList.add(cls); }
        function removeClass(el, cls){ if (el && el.classList.contains(cls)) el.classList.remove(cls); }
        function startFadeIn(){
            var html = document.documentElement;
            var body = document.body;
            addClass(html, 'page-enter-ready');
            addClass(body, 'page-enter-ready');
            removeClass(html, 'page-enter');
            removeClass(body, 'page-enter');
        }
        // Apply initial state as early as possible
        addClass(document.documentElement, 'page-enter');
        // Body may not yet exist
        if (document.body) addClass(document.body, 'page-enter');
        else document.addEventListener('DOMContentLoaded', function(){ addClass(document.body, 'page-enter'); }, { once: true });

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', startFadeIn, { once: true });
        } else {
            // Double rAF to ensure styles apply before starting transition
            requestAnimationFrame(function(){ requestAnimationFrame(startFadeIn); });
        }
        // Handle bfcache restore
        window.addEventListener('pageshow', function(e){ if (e.persisted) startFadeIn(); });
    })();
</script>
<script src="{{ asset('js/tailwind-config.js') }}"></script>

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<!-- Custom JavaScript -->
<script src="{{ asset('js/script.js') }}"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<!-- Global Page Enter Transition Styles -->
<style>
    /* Smooth fade-in for initial page render */
    html.page-enter, body.page-enter { opacity: 0; will-change: opacity; }
    html.page-enter-ready, body.page-enter-ready { opacity: 1; transition: opacity .75s cubic-bezier(.16,1,.3,1) 20ms; }
    /* Respect reduced motion preferences */
    @media (prefers-reduced-motion: reduce) {
        html.page-enter-ready, body.page-enter-ready { transition: none; }
    }
</style>

<!-- Global Lazy Loading Initializer -->
<script>
    // Global Page Transition Overlay (Spinner + "Loading")
    (function () {
        // Track if we're currently showing the overlay
        var isOverlayVisible = false;
        
        function buildOverlayContent() {
            return (
                '<div class="w-full h-full flex flex-col items-center justify-center">' +
                    '<div class="w-16 h-16 border-4 border-gray-200 border-t-[#FE0004] rounded-full animate-spin mb-5"></div>' +
                    '<div id="loading-text" class="text-gray-700 text-lg font-semibold text-center">Loading</div>' +
                '</div>'
            );
        }

        function ensureOverlay() {
            var overlay = document.getElementById('page-transition-overlay');
            if (!overlay) {
                overlay = document.createElement('div');
                overlay.id = 'page-transition-overlay';
                overlay.className = 'fixed inset-0 bg-white/95 backdrop-blur-md z-[9999] hidden';
                overlay.innerHTML = buildOverlayContent();
                
                // Defer append until body is available
                if (document.body) {
                    document.body.appendChild(overlay);
                } else {
                    document.addEventListener('DOMContentLoaded', function () {
                        if (!document.getElementById('page-transition-overlay')) {
                            document.body.appendChild(overlay);
                        }
                    }, { once: true });
                }
            }
            return overlay;
        }

        function showOverlay() {
            if (isOverlayVisible) return;
            var overlay = ensureOverlay();
            if (overlay) {
                overlay.classList.remove('hidden');
                isOverlayVisible = true;
            }
        }

        function hideOverlay() {
            var overlay = document.getElementById('page-transition-overlay');
            if (overlay) {
                overlay.classList.add('hidden');
                isOverlayVisible = false;
            }
        }

        function shouldIgnoreLink(a) {
            if (!a) return true;
            var href = a.getAttribute('href') || '';
            if (a.hasAttribute('download')) return true;
            if (a.target && a.target.toLowerCase() === '_blank') return true;
            if (href.startsWith('#')) return true;
            if (href.startsWith('javascript:')) return true;
            if (a.getAttribute('data-no-overlay') === 'true') return true;
            return false;
        }

        // Detect if page provides its own custom overlay (e.g., with progress bar)
        function isCustomOverlay() {
            var existing = document.getElementById('page-transition-overlay');
            return !!(existing && existing.querySelector('#loading-progress-bar'));
        }

        // Handle page show event (triggered on both initial load and when navigating back/forward)
        function handlePageShow(event) {
            // If this is a back/forward navigation (persisted is true), hide the overlay
            if (event.persisted) {
                hideOverlay();
            }
        }

        // Idempotent attachment of listeners
        function attachGlobalListenersOnce() {
            if (window.__globalOverlayListenersAttached) return;
            window.__globalOverlayListenersAttached = true;

            // Handle page show event (for back/forward navigation)
            window.addEventListener('pageshow', handlePageShow);

            // Show on full page unload/navigation
            window.addEventListener('beforeunload', function () {
                // Only show overlay if not already showing
                if (!isOverlayVisible) {
                    try { showOverlay(); } catch (e) {}
                }
            });

            // Show on anchor navigations (same-tab)
            document.addEventListener('click', function (e) {
                // Respect modifier keys (open in new tab/window)
                if (e.defaultPrevented || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
                var a = e.target.closest('a');
                if (!a || shouldIgnoreLink(a)) return;
                // Only same-tab navigations
                showOverlay();
            }, true);

            // Show on form submit
            document.addEventListener('submit', function (e) {
                var form = e.target;
                if (form && form.getAttribute('data-no-overlay') !== 'true') {
                    showOverlay();
                }
            }, true);

            // Hide overlay when page is fully loaded
            window.addEventListener('load', function() {
                // Small delay to ensure smooth transition
                setTimeout(hideOverlay, 100);
            });
        }

        // Initialize listeners when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            if (!isCustomOverlay()) {
                attachGlobalListenersOnce();
            }
            // Hide overlay in case it was shown during page load
            setTimeout(hideOverlay, 100);
        });

        // Ensure overlay exists and attach listeners after DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function(){
                ensureOverlay();
                setupListenersWhenReady();
            }, { once: true });
        } else {
            ensureOverlay();
            setupListenersWhenReady();
        }
    })();
</script>
    
<!-- Additional CSS/JS can be added here -->
@stack('additional-head')
