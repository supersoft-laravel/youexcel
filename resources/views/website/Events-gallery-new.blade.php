@extends('website.app')

@section('content')

@push('style')
.fixed-image-size {
	width: 414px !important;
	height: 311px !important;
	object-fit: cover;
}
@endpush
    <style>
        :root {
            --primary: #1a4480;
            --secondary: #ff9800;
            --accent: #e74c3c;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --transition: all 0.4s ease;
        }
        
        .event-gallery-section .hero-section {
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .event-gallery-section .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center bottom;
        }
        
        .event-gallery-section .hero-content {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .event-gallery-section .hero-content h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: #fff;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .event-gallery-section .hero-content p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            color: #fff;
            opacity: 0.9;
        }
        
        .event-gallery-section .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .event-gallery-section .gallery-controls {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin: 40px 0;
        }
        
        .event-gallery-section .filter-btn {
            padding: 2px 24px;
            background: white;
            border: 2px solid var(--secondary);
            color: var(--primary);
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-size: 14px;
        }
        
        .event-gallery-section .filter-btn:hover, .event-gallery-section .filter-btn.active {
            background: var(--secondary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(26, 188, 156, 0.3);
        }
        
        .event-gallery-section .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            margin: 40px 0 80px;
        }
        
        .event-gallery-section .gallery-item {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: var(--transition);
            transform: translateY(0);
            position: relative;
        }
        
        .event-gallery-section .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .event-gallery-section .gallery-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }
        
        .event-gallery-section .gallery-item:hover .gallery-image {
            transform: scale(1.1); /* Slightly increased scale for better zoom effect */
        }
        
        .event-gallery-section .gallery-info {
            padding: 20px;
        }
        
        .event-gallery-section .gallery-category {
            display: inline-block;
            background: var(--secondary);
            color: white;
            font-size: 0.85rem;
            padding: 4px 12px;
            border-radius: 50px;
            margin-bottom: 12px;
        }
        
        .event-gallery-section .gallery-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--primary);
            font-weight: 600;
        }
        
        .event-gallery-section .gallery-date {
            display: flex;
            align-items: center;
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 15px;
        }
        
        .event-gallery-section .gallery-date i {
            margin-right: 8px;
            color: var(--secondary);
        }
        
        .event-gallery-section .view-btn {
            display: inline-flex;
            align-items: center;
            color: var(--secondary);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .event-gallery-section .view-btn i {
            margin-left: 8px;
            transition: var(--transition);
        }
        
        .event-gallery-section .view-btn:hover {
            color: var(--primary);
        }
        
        .event-gallery-section .view-btn:hover i {
            transform: translateX(5px);
        }
        
        .event-gallery-section .photo-count {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .event-gallery-section .photo-count i {
            margin-right: 5px;
            color: var(--secondary);
        }
        
        .event-gallery-section .section-title {
            text-align: center;
            margin: 80px 0 40px;
            position: relative;
        }
        
        .event-gallery-section .section-title h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            color: var(--primary);
            display: inline-block;
            position: relative;
        }
        
        .event-gallery-section .section-title h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }
        
        .event-gallery-section .gallery-stats {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin: 60px 0;
        }
        
        .event-gallery-section .stat-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: var(--transition);
            min-width: 200px;
        }
        
        .event-gallery-section .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .event-gallery-section .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 10px;
            line-height: 1;
        }
        
        .event-gallery-section .stat-label {
            color: var(--gray);
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .event-gallery-section .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .event-gallery-section .gallery-grid {
                grid-template-columns: 1fr;
            }
            
            .event-gallery-section .gallery-controls {
                gap: 8px;
            }
            
            .event-gallery-section .filter-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }
        
        /* Animation classes */
        .event-gallery-section .animate-in {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Skeleton Base */
        .skeleton {
            background: #e2e2e2;
            position: relative;
            overflow: hidden;
        }
        
        .skeleton::after {
            content: "";
            position: absolute;
            top: 0;
            left: -150px;
            height: 100%;
            width: 150px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
            animation: shimmer 1.2s infinite;
        }
        
        @keyframes shimmer {
            100% {
                left: 100%;
            }
        }
        
        /* Skeleton Card */
        .skeleton-card {
            border-radius: 8px;
            height: 300px;
        }
        
        /* ===== Overlay Styling ===== */

        .gallery-item {
            position: relative;
            overflow: hidden;
        }
        
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.2), transparent);
            color: #fff;
            transform: translateY(100%);
            transition: all 0.4s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }
        
        .overlay-course {
            font-size: 1rem;
            font-weight: 600;
        }
        
        .overlay-company {
            font-size: 0.85rem;
            opacity: 0.9;
        }
        
        /* Always visible on mobile */
        @media (max-width: 768px) {
            .gallery-overlay {
                transform: translateY(0);
            }
        }
        .gallery-item {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
    
    <div class="event-gallery-section">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content mt-5">
                <h1>Impact Showcase Galleryss</h1>
                <p>Explore our transformative events, workshops, and success stories that have empowered thousands to excel in their careers and personal growth.</p>
            </div>
        </section>
    
        <!-- Gallery Section -->
        <section class="gallery-section" style="padding-bottom: 0px !important;">
            <div class="container">
                <!-- Search Bar -->
                <div class="gallery-search mb-3">
                    <input type="text" id="gallerySearchInput" 
                           class="form-control" 
                           placeholder="Search by Course or Company...">
                </div>
        
                <!-- ================= Parent Categories ================= -->
                <div class="gallery-controls parent-categories">
                    @foreach($parentCategories as $parent)
                        <button class="filter-btn parent-btn {{ $loop->first ? 'active' : '' }}"
                                onclick="loadSubCategories({{ $parent->id }}, this)">
                            {{ $parent->cat_name }}
                        </button>
                    @endforeach
                </div>
        
                <!-- ================= Sub Categories ================= -->
                <div id="subCategoryWrapper"
                     class="gallery-controls sub-categories mt-3"
                     style="overflow-x:auto; white-space: nowrap;">
                </div>
        
                <!-- ================= Gallery Grid ================= -->
                <div id="galleryContainer" class="gallery-grid" style="padding: 20px;">
                    <!-- AJAX gallery items will load here -->
                </div>
        
            </div>
        </section>

    
        <!-- Stats Section -->
        <section class="stats-section" style="padding-top: 0px !important;">
            <div class="container">
                <div class="section-title">
                    <h2>Our Impact in Numbers</h2>
                </div>
                
                <div class="gallery-stats">
                    <div class="stat-card">
                        <div class="stat-number">120+</div>
                        <div class="stat-label">Events Hosted</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">8,500+</div>
                        <div class="stat-label">Participants Trained</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">14</div>
                        <div class="stat-label">Countries Reached</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<script>
let currentGalleryData = []; // store currently loaded gallery for search

function setActiveButton(button, className) {
    document.querySelectorAll('.' + className).forEach(btn => {
        btn.classList.remove('active');
    });
    button.classList.add('active');
}

function showSkeletonLoader() {
    let container = document.getElementById('galleryContainer');
    container.innerHTML = '';
    for (let i = 0; i < 6; i++) {
        container.innerHTML += `
            <div class="gallery-item animate-in">
                <div class="skeleton skeleton-card"></div>
            </div>
        `;
    }
}

function loadSubCategories(parentId, element) {
    setActiveButton(element, 'parent-btn');
    fetch('/get-subcategories/' + parentId)
        .then(response => response.json())
        .then(data => {
            let wrapper = document.getElementById('subCategoryWrapper');
            wrapper.innerHTML = '';

            if (data.length > 0) {
                data.forEach((sub, index) => {
                    wrapper.innerHTML += `
                        <button class="filter-btn sub-btn ${index === 0 ? 'active' : ''}"
                                onclick="loadGallery(${sub.id}, this)">
                            ${sub.cat_name}
                        </button>
                    `;
                });

                // Auto load first subcategory
                loadGallery(data[0].id, document.querySelector('.sub-btn'));
            } else {
                // If NO subcategories → directly load parent gallery
                loadGallery(parentId, element);
            }
        });
}

function loadGallery(categoryId, element) {
    if (element && element.classList.contains('sub-btn')) {
        setActiveButton(element, 'sub-btn');
    }

    showSkeletonLoader();

    fetch('/gallery-by-category/' + categoryId)
        .then(response => response.json())
        .then(data => {
            currentGalleryData = data; // save for search
            renderGallery(data);
        });
}

// ================= Render Gallery Function =================
function renderGallery(data) {
    let container = document.getElementById('galleryContainer');
    container.innerHTML = '';

    if (data.length === 0) {
        container.innerHTML = '<p>No media found.</p>';
        return;
    }

    // Group by category name
    let grouped = {};
    data.forEach(item => {
        if (!grouped[item.category.cat_name]) {
            grouped[item.category.cat_name] = [];
        }
        grouped[item.category.cat_name].push(item);
    });

    for (let categoryName in grouped) {
        let mediaItems = grouped[categoryName];

        mediaItems.forEach(item => {
            let catType = item.category.cat_type;
            let mediaHTML = '';

            if (item.type === 'video') {
                mediaHTML = `
                    <video class="gallery-image" controls>
                        <source src="/gallery_images/${item.image}" type="video/mp4">
                    </video>
                `;
            } else {
                mediaHTML = `
                    <img src="/gallery_images/${item.image}" 
                         alt="${categoryName}" 
                         class="gallery-image">
                `;
            }

            let overlayContent = `
                <div class="overlay-course">
                    ${item.course_name ?? 'N/A'}
                </div>
            `;
            
            if (item.company_name) {
                overlayContent += `
                    <div class="overlay-company">
                        ${item.company_name}
                    </div>
                `;
            }
            
            let galleryHTML = `
                <div class="gallery-item animate-in" data-category="${catType}">
                    <a href="/gallery_images/${item.image}" 
                       class="glightbox"
                       ${item.type === 'video' ? 'data-type="video"' : ''}
                       data-gallery="portfolio-gallery-${catType}">
                       
                        ${mediaHTML}
            
                        <div class="gallery-overlay">
                            ${overlayContent}
                        </div>
            
                    </a>
                </div>
            `;

            container.innerHTML += galleryHTML;
        });
    }

    if (typeof GLightbox !== "undefined") {
        GLightbox({ selector: '.glightbox' });
    }
}

// ================= Search Filter =================
document.getElementById('gallerySearchInput').addEventListener('input', function() {
    let searchTerm = this.value.toLowerCase();

    let filteredData = currentGalleryData.filter(item => {
        let course = item.course_name ? item.course_name.toLowerCase() : '';
        let company = item.company_name ? item.company_name.toLowerCase() : '';
        return course.includes(searchTerm) || company.includes(searchTerm);
    });

    renderGallery(filteredData);
});

// ================= Auto load first parent on page load =================
document.addEventListener("DOMContentLoaded", function() {
    let firstParent = document.querySelector('.parent-btn');
    if (firstParent) {
        firstParent.click();
    }
});
</script>


    <script>
        // Gallery Filtering Functionality
        document.addEventListener('DOMContentLoaded', function() {
            GLightbox({ selector: '.glightbox' });
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    button.classList.add('active');
                    
                    const filterValue = button.getAttribute('data-filter');
                    
                    // Filter gallery items
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            item.classList.add('animate-in');
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
            
            // Animation on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.gallery-item, .stat-card').forEach(item => {
                observer.observe(item);
            });
        });
    </script>
    
    
    <!--<div class="gallery-date">-->
    <!--                        <i class="fas fa-calendar-alt"></i>-->
    <!--                        <strong>Event:</strong> ${item.event_name ?? 'N/A'}-->
    <!--                    </div>-->

    <!--                    <div class="gallery-date">-->
    <!--                        <i class="fas fa-book-open"></i> -->
    <!--                        <strong>Course:</strong> ${item.course_name ?? 'N/A'}-->
    <!--                    </div>-->

    <!--                    <div class="gallery-date">-->
    <!--                        <i class="fas fa-building"></i> -->
    <!--                        <strong>Company:</strong> ${item.company_name ?? 'N/A'}-->
    <!--                    </div>-->

@endsection
