        // Date Cards Scrolling Functions
        function scrollDateCards(direction) {
            const container = document.getElementById('dateCardsContainer');
            const scrollAmount = 300; // Scroll by 300px
            
            if (direction === 'left') {
                container.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                container.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
            
            // Update scroll indicators after scrolling
            setTimeout(updateScrollIndicators, 500);
        }
        
        // Touch/Swipe functionality for mobile
        let isScrolling = false;
        let startX = 0;
        let scrollLeft = 0;
        
        function initTouchScrolling() {
            const container = document.getElementById('dateCardsContainer');
            if (!container) return;
            
            // Touch events
            container.addEventListener('touchstart', handleTouchStart, { passive: true });
            container.addEventListener('touchmove', handleTouchMove, { passive: true });
            container.addEventListener('touchend', handleTouchEnd, { passive: true });
            
            // Mouse events for desktop
            container.addEventListener('mousedown', handleMouseDown);
            container.addEventListener('mousemove', handleMouseMove);
            container.addEventListener('mouseup', handleMouseUp);
            container.addEventListener('mouseleave', handleMouseUp);
            
            // Scroll event for indicators
            container.addEventListener('scroll', updateScrollIndicators);
        }
        
        function handleTouchStart(e) {
            const container = document.getElementById('dateCardsContainer');
            startX = e.touches[0].pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
        }
        
        function handleTouchMove(e) {
            if (!startX) return;
            
            const container = document.getElementById('dateCardsContainer');
            const x = e.touches[0].pageX - container.offsetLeft;
            const walk = (x - startX) * 2;
            container.scrollLeft = scrollLeft - walk;
        }
        
        function handleTouchEnd() {
            startX = 0;
        }
        
        function handleMouseDown(e) {
            const container = document.getElementById('dateCardsContainer');
            isScrolling = true;
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
            container.style.cursor = 'grabbing';
        }
        
        function handleMouseMove(e) {
            if (!isScrolling) return;
            
            const container = document.getElementById('dateCardsContainer');
            e.preventDefault();
            const x = e.pageX - container.offsetLeft;
            const walk = (x - startX) * 2;
            container.scrollLeft = scrollLeft - walk;
        }
        
        function handleMouseUp() {
            const container = document.getElementById('dateCardsContainer');
            isScrolling = false;
            container.style.cursor = 'grab';
        }
        
        // Update scroll indicators
        function updateScrollIndicators() {
            const container = document.getElementById('dateCardsContainer');
            const indicators = document.querySelectorAll('.scroll-indicator');
            
            if (!container || indicators.length === 0) return;
            
            const scrollPosition = container.scrollLeft;
            const maxScroll = container.scrollWidth - container.clientWidth;
            const scrollPercentage = scrollPosition / maxScroll;
            
            // Calculate which indicator should be active
            const activeIndex = Math.round(scrollPercentage * (indicators.length - 1));
            
            indicators.forEach((indicator, index) => {
                if (index === activeIndex) {
                    indicator.classList.add('active');
                    indicator.classList.remove('bg-gray-300');
                    indicator.classList.add('bg-gray-600');
                } else {
                    indicator.classList.remove('active');
                    indicator.classList.remove('bg-gray-600');
                    indicator.classList.add('bg-gray-300');
                }
            });
        }
        
        // Auto-hide arrow buttons based on scroll position
        function updateArrowButtons() {
            const container = document.getElementById('dateCardsContainer');
            const leftArrow = document.querySelector('button[onclick="scrollDateCards(\'left\')"]');
            const rightArrow = document.querySelector('button[onclick="scrollDateCards(\'right\')"]');
            
            if (!container || !leftArrow || !rightArrow) return;
            
            if (container.scrollLeft <= 0) {
                leftArrow.style.opacity = '0.3';
                leftArrow.style.pointerEvents = 'none';
            } else {
                leftArrow.style.opacity = '1';
                leftArrow.style.pointerEvents = 'auto';
            }
            
            if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
                rightArrow.style.opacity = '0.3';
                rightArrow.style.pointerEvents = 'none';
            } else {
                rightArrow.style.opacity = '1';
                rightArrow.style.pointerEvents = 'auto';
            }
        }
        
        // Initialize touch scrolling when page loads
        document.addEventListener('DOMContentLoaded', function() {
            addResponsiveStyles();
            initTouchScrolling();
            
            // Update arrow buttons initially
            setTimeout(updateArrowButtons, 100);
            
            // Update arrow buttons on scroll
            const container = document.getElementById('dateCardsContainer');
            if (container) {
                container.addEventListener('scroll', updateArrowButtons);
            }
        });
