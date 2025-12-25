/**
 * ICS Group - Interactive Features
 * Clean JavaScript for filtering and interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    // Resource Filter and Search Functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const resourceCards = document.querySelectorAll('.resource-card');
    const searchInput = document.getElementById('searchInput');
    const resultNumber = document.getElementById('resultNumber');
    const noResults = document.getElementById('noResults');
    let currentFilter = 'All';
    let currentSearch = '';

    function updateResources() {
        let visibleCount = 0;

        resourceCards.forEach(card => {
            const cardType = card.getAttribute('data-type');
            const cardTitle = card.querySelector('h3').textContent.toLowerCase();
            const cardText = card.querySelector('.card-text').textContent.toLowerCase();
            const searchTerm = currentSearch.toLowerCase();

            // Check filter
            const matchesFilter = currentFilter === 'All' || cardType === currentFilter;

            // Check search
            const matchesSearch = searchTerm === '' ||
                                 cardTitle.includes(searchTerm) ||
                                 cardText.includes(searchTerm) ||
                                 cardType.toLowerCase().includes(searchTerm);

            if (matchesFilter && matchesSearch) {
                card.classList.remove('hidden');
                card.style.display = 'block';
                card.style.animation = 'fadeIn 0.4s ease forwards';
                visibleCount++;
            } else {
                card.classList.add('hidden');
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            }
        });

        // Update result count
        if (resultNumber) {
            resultNumber.textContent = visibleCount;
        }

        // Show/hide no results message
        if (noResults) {
            if (visibleCount === 0) {
                noResults.style.display = 'block';
                noResults.style.animation = 'fadeIn 0.4s ease forwards';
            } else {
                noResults.style.display = 'none';
            }
        }
    }

    // Filter button click handlers
    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');
                currentFilter = filterValue;

                // Update active state
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                updateResources();
            });
        });
    }

    // Search input handler
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            currentSearch = e.target.value;
            updateResources();
        });

        // Clear search on ESC
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                searchInput.value = '';
                currentSearch = '';
                updateResources();
            }
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

    // Hamburger Menu Functionality
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuOverlay = document.querySelector('.menu-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-menu nav a');

    function toggleMenu() {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    }

    function closeMenu() {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (hamburger) {
        hamburger.addEventListener('click', toggleMenu);
    }

    if (menuOverlay) {
        menuOverlay.addEventListener('click', closeMenu);
    }

    // Close menu when clicking a link
    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            closeMenu();
        }
    });

    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all sections for animation
    document.querySelectorAll('.section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        observer.observe(section);
    });
});
