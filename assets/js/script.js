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
        const resourcesGrid = document.getElementById('resourcesGrid');

        resourceCards.forEach(card => {
            const cardType = card.getAttribute('data-type');
            const cardTitle = card.querySelector('h3') ? card.querySelector('h3').textContent.toLowerCase() : '';
            const cardText = card.querySelector('.card-text') ? card.querySelector('.card-text').textContent.toLowerCase() : '';
            const searchTerm = currentSearch.toLowerCase().trim();

            // Check filter
            const matchesFilter = currentFilter === 'All' || cardType === currentFilter;

            // Check search
            const matchesSearch = searchTerm === '' ||
                                 cardTitle.includes(searchTerm) ||
                                 cardText.includes(searchTerm) ||
                                 cardType.toLowerCase().includes(searchTerm);

            if (matchesFilter && matchesSearch) {
                // Remove hidden class immediately
                card.classList.remove('hidden');
                // Show card with animation
                card.style.display = 'block';
                card.style.opacity = '0';
                // Force reflow
                void card.offsetWidth;
                card.style.opacity = '1';
                card.style.animation = 'fadeIn 0.4s ease forwards';
                visibleCount++;
            } else {
                // Hide card
                card.classList.add('hidden');
                card.style.opacity = '0';
                setTimeout(() => {
                    if (card.classList.contains('hidden')) {
                        card.style.display = 'none';
                    }
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

    // Pagination for Resources Page
    if (resourceCards.length > 0) {
        let currentPage = 1;
        const itemsPerPage = 20;

        function updateResourcesWithPagination() {
            // Get filtered cards
            const filteredCards = Array.from(resourceCards).filter(card => {
                const cardType = card.getAttribute('data-type');
                const cardTitle = card.querySelector('h3') ? card.querySelector('h3').textContent.toLowerCase() : '';
                const cardText = card.querySelector('.card-text') ? card.querySelector('.card-text').textContent.toLowerCase() : '';
                const searchTerm = currentSearch.toLowerCase().trim();

                const matchesFilter = currentFilter === 'All' || cardType === currentFilter;
                const matchesSearch = searchTerm === '' ||
                                    cardTitle.includes(searchTerm) ||
                                    cardText.includes(searchTerm) ||
                                    cardType.toLowerCase().includes(searchTerm);

                return matchesFilter && matchesSearch;
            });

            const totalItems = filteredCards.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);

            // Reset to page 1 if out of range
            if (currentPage > totalPages && totalPages > 0) {
                currentPage = 1;
            }

            // Hide all cards first
            resourceCards.forEach(card => card.style.display = 'none');

            // Show cards for current page
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = Math.min(startIndex + itemsPerPage, totalItems);

            for (let i = startIndex; i < endIndex; i++) {
                filteredCards[i].style.display = 'block';
                filteredCards[i].style.opacity = '1';
                filteredCards[i].style.animation = 'fadeIn 0.4s ease forwards';
            }

            // Update result count
            const showingStart = document.getElementById('showingStart');
            const showingEnd = document.getElementById('showingEnd');
            const totalResults = document.getElementById('totalResults');

            if (showingStart && showingEnd && totalResults) {
                if (totalItems > 0) {
                    showingStart.textContent = startIndex + 1;
                    showingEnd.textContent = endIndex;
                    totalResults.textContent = totalItems;
                } else {
                    showingStart.textContent = 0;
                    showingEnd.textContent = 0;
                    totalResults.textContent = 0;
                }
            }

            // Update pagination buttons
            const prevBtn = document.getElementById('prevPage');
            const nextBtn = document.getElementById('nextPage');
            const pageNumbers = document.getElementById('pageNumbers');
            const paginationContainer = document.getElementById('paginationContainer');

            if (prevBtn) prevBtn.disabled = currentPage === 1;
            if (nextBtn) nextBtn.disabled = currentPage >= totalPages || totalPages === 0;

            // Show/hide pagination
            if (paginationContainer) {
                paginationContainer.style.display = totalItems > itemsPerPage ? 'flex' : 'none';
            }

            // Generate page numbers
            if (pageNumbers) {
                pageNumbers.innerHTML = '';

                let startPage = Math.max(1, currentPage - 2);
                let endPage = Math.min(totalPages, currentPage + 2);

                if (currentPage <= 3) {
                    endPage = Math.min(5, totalPages);
                }
                if (currentPage > totalPages - 3) {
                    startPage = Math.max(1, totalPages - 4);
                }

                for (let i = startPage; i <= endPage; i++) {
                    const pageBtn = document.createElement('button');
                    pageBtn.className = 'page-number' + (i === currentPage ? ' active' : '');
                    pageBtn.textContent = i;
                    pageBtn.setAttribute('aria-label', `Go to page ${i}`);
                    pageBtn.addEventListener('click', () => {
                        currentPage = i;
                        updateResourcesWithPagination();
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    });
                    pageNumbers.appendChild(pageBtn);
                }
            }

            // Show/hide no results
            if (noResults) {
                noResults.style.display = totalItems === 0 ? 'block' : 'none';
            }
        }

        // Update filter handlers to use pagination
        filterButtons.forEach(button => {
            const originalHandler = button.onclick;
            button.onclick = null; // Remove old handler
            button.addEventListener('click', function() {
                currentFilter = this.getAttribute('data-filter');
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                currentPage = 1;
                updateResourcesWithPagination();
            });
        });

        // Update search handler to use pagination
        if (searchInput) {
            const inputHandler = () => {
                currentSearch = searchInput.value;
                currentPage = 1;
                updateResourcesWithPagination();
            };
            searchInput.removeEventListener('input', inputHandler);
            searchInput.addEventListener('input', inputHandler);
        }

        // Pagination button handlers
        const prevBtn = document.getElementById('prevPage');
        const nextBtn = document.getElementById('nextPage');

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    updateResourcesWithPagination();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                const filteredCards = Array.from(resourceCards).filter(card => {
                    const cardType = card.getAttribute('data-type');
                    const cardTitle = card.querySelector('h3') ? card.querySelector('h3').textContent.toLowerCase() : '';
                    const cardText = card.querySelector('.card-text') ? card.querySelector('.card-text').textContent.toLowerCase() : '';
                    const searchTerm = currentSearch.toLowerCase().trim();

                    const matchesFilter = currentFilter === 'All' || cardType === currentFilter;
                    const matchesSearch = searchTerm === '' ||
                                        cardTitle.includes(searchTerm) ||
                                        cardText.includes(searchTerm) ||
                                        cardType.toLowerCase().includes(searchTerm);

                    return matchesFilter && matchesSearch;
                });

                const totalPages = Math.ceil(filteredCards.length / itemsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    updateResourcesWithPagination();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            });
        }

        // Initialize pagination
        updateResourcesWithPagination();
    }
});
