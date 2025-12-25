/**
 * ICS Group - Interactive Features
 * Clean JavaScript for filtering and interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    // Resource Filter Functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const resourceCards = document.querySelectorAll('.resource-card');

    if (filterButtons.length > 0 && resourceCards.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');

                // Update active state
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter resources with animation
                resourceCards.forEach(card => {
                    const cardType = card.getAttribute('data-type');

                    if (filterValue === 'All' || cardType === filterValue) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeIn 0.4s ease forwards';
                    } else {
                        card.style.display = 'none';
                    </div>
                });
            });
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});
