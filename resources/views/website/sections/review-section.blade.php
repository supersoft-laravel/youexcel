    <style>
        .review-container {
            width: 100%;
            max-width: 1200px;
            background: transparent;
            border-radius: 20px;
            /* box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1); */
            overflow: hidden;
            padding: 30px;
        }
        
        .review-container .header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 30px;
            padding: 0 10px;
        }

        

        .review-container .tabs-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .review-container .tab {
            padding: 7px 15px;
            border-radius: 5px;
            background-color: #f1f3f4;
            border: none;
            font-size: 12px;
            font-weight: 600;
            color: #5f6368;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .review-container .tab:hover {
            background-color: #e8eaed;
            transform: translateY(-2px);
        }
        
        .review-container .tab.active {
            background-color: #1a73e8;
            color: white;
        }
        
        .review-container .header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #2d3748;
            position: relative;
            padding-bottom: 10px;
        }
        
        .review-container .header h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #4361ee, #3a0ca3);
            border-radius: 2px;
        }
        
        .review-container .header-buttons {
            display: flex;
            gap: 10px;
        }
        
        .review-container .header-nav {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: white;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 18px;
            color: #4361ee;
        }
        
        .review-container .header-nav:hover {
            background: #4361ee;
            color: white;
            transform: scale(1.1);
        }
        
        .review-container .carousel-wrapper {
            position: relative;
            overflow: hidden;
            padding: 10px 0;
        }
        
        .review-container .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        
        .review-container .product-card {
            flex: 0 0 calc(25% - 20px);
            margin: 0 10px;
            /* background: white; */
            border-radius: 15px;
            overflow: hidden;
            /* box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); */
            transition: all 0.3s ease;
            position: relative;
            /*border: 1px solid #f0f4f8;*/
            cursor: pointer;
        }
        
        .review-container .product-card:hover {
            transform: translateY(-10px);
            /* box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15); */
        }
        
        .review-container .badge {
            position: absolute;
            top: 165px;
            right: 5px;
            background: linear-gradient(90deg, #ff6b6b, #ff8e53);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            z-index: 2;
        }
        
        .review-container .product-img {
            height: 180px;
            width: 100%;
            /* background: linear-gradient(45deg, #f8f9fa, #e9ecef); */
            display: flex;
            justify-content: center;
            align-items: center;
            color: #adb5bd;
            font-size: 48px;
        }
        
        .review-container .product-content {
            padding: 20px;
        }
        
        .review-container .product-name {
            font-size: 18px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 10px;
            height: 50px;
            overflow: hidden;
        }
        
        .review-container .rating {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .review-container .stars {
            color: #ffc107;
            margin-right: 8px;
        }
        
        .review-container .rating-value {
            font-weight: 600;
            color: #4a5568;
        }
        
        .review-container .pricing {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 5px;
        }
        
        .review-container .current-price {
            font-size: 22px;
            font-weight: 700;
            color: #3a0ca3;
        }
        
        .review-container .original-price {
            font-size: 16px;
            color: #718096;
            text-decoration: line-through;
        }
        
        .review-container .discount {
            background: #e9f7ef;
            color: #38a169;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: 600;
        }
        
        .review-container .cta-button {
            display: block;
            width: 100%;
            text-align: center;
            background: linear-gradient(90deg, #4361ee, #3a0ca3);
            color: white;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            margin-top: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-size: 16px;
        }
        
        .review-container .cta-button:hover {
            background: linear-gradient(90deg, #3a0ca3, #4361ee);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .review-container .carousel-dots {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .review-container .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #cbd5e0;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .review-container .dot.active {
            background: #4361ee;
            transform: scale(1.2);
        }
        
        .review-container .sale-banner {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: linear-gradient(90deg, #ff6b6b, #ff8e53);
            border-radius: 15px;
            color: white;
            font-size: 24px;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
        }
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .review-container .product-card {
                flex: 0 0 calc(33.333% - 20px);
            }
        }
        
        @media (max-width: 768px) {
            .review-container .product-card {
                flex: 0 0 calc(50% - 20px);
            }
            
            .review-container .header {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            
            .review-container .header h1 {
                margin-bottom: 15px;
            }
            
            .review-container .header h1::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        
        @media (max-width: 480px) {
            .review-container .product-card {
                flex: 0 0 calc(100% - 20px);
            }
        }
    </style>
    <div class="review-container">
        <div class="header">
            <div class="tabs-container">
                @php $tab = $activeTab ?? 'all'; @endphp
            
                <button class="tab {{ $tab == 'all' ? 'active' : '' }}" data-category="all">
                    <i class="fas fa-star"></i> All Reviews
                </button>
                <button class="tab {{ $tab == 'general' ? 'active' : '' }}" data-category="general">
                    <i class="fas fa-folder-open"></i> General
                </button>
                <button class="tab {{ $tab == 'excel' ? 'active' : '' }}" data-category="excel">
                    <i class="fas fa-table"></i> MS Excel & Office
                </button>
                <button class="tab {{ $tab == 'powerbi' ? 'active' : '' }}" data-category="powerbi">
                    <i class="fas fa-chart-bar"></i> Power BI
                </button>
                <button class="tab {{ $tab == 'sql' ? 'active' : '' }}" data-category="sql">
                    <i class="fas fa-database"></i> SQL
                </button>
                <button class="tab {{ $tab == 'python' ? 'active' : '' }}" data-category="python">
                    <i class="fab fa-python"></i> Python
                </button>
                <button class="tab {{ $tab == 'financial-modeling' ? 'active' : '' }}" data-category="financial-modeling">
                    <i class="fas fa-chart-line"></i> Financial Modeling & Tax
                </button>
            </div>
            <div class="header-buttons">
                <button class="header-nav header-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="header-nav header-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        
        <div class="carousel-wrapper">
            <div class="carousel-track" id="carouselTrack">
                <div class="product-card" data-category="excel financial-modeling">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/AE-FMA-PBI_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="excel">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/AE_feedback-FB1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="excel">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/AE_feedback-FB2-Corporate-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="excel">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/AE_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="powerbi financial-modeling">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/FMA_and_PBI-FB1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="powerbi financial-modeling">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/FMA_and_PBI_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB2-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB3-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB4-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB5-Corprorate-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/Ecommerce_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB6-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB7-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB8-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB9-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB10-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-FB11-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google2-Corporate-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google3-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google4-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google5-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google6-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google7-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google8-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="general">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/General_feedback-Google9-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="excel">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/MS_Office_feedback-Google1-Corporate-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="powerbi">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/PBI_feedback-FB1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="powerbi">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/PBI_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="powerbi">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/PBI_feedback-Google2-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="powerbi">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/PBI_feedback-Google3-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="powerbi">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/PBI_Feedback-Google4-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="python">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/Python_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="python">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/Python_feedback-Google2-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="sql">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/SQL_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="sql">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/SQL_feedback-Google2-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                <div class="product-card" data-category="financial-modeling">
                    <div class="product-img">
                        <img style="width: 100%;" src="{{ asset('img/review/Tax_feedback-Google1-removebg-preview.png') }}" alt="" />
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="carousel-dots" id="carouselDots">
            <!-- Dots will be added by JavaScript -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const reviewCards = document.querySelectorAll('.product-card');
            const carouselTrack = document.getElementById('carouselTrack');
            const prevButton = document.querySelector('.header-prev');
            const nextButton = document.querySelector('.header-next');
            const dotsContainer = document.getElementById('carouselDots');
            
            let productsPerSlide = 4;
            let currentIndex = 0;
            let totalSlides;
            
            // Initialize carousel
            function initCarousel() {
                updateProductsPerSlide();
                setupCarousel();
                updateCarousel();
            }
            
            // Update products per slide based on screen width
            function updateProductsPerSlide() {
                let tabReviewCards = document.querySelectorAll('.product-card');
                visibleCards = Array.from(reviewCards).filter(card => 
                    card.style.display !== 'none'
                );
                let productCount = visibleCards.length;
                if (window.innerWidth <= 1024 && window.innerWidth > 768) {
                    productsPerSlide = 3;
                    totalSlides = productCount - 2;
                } else if (window.innerWidth <= 768 && window.innerWidth > 480) {
                    productsPerSlide = 2;
                    totalSlides = productCount - 1;
                } else if (window.innerWidth <= 480) {
                    productsPerSlide = 1;
                    totalSlides = productCount;
                } else {
                    productsPerSlide = 4;
                    totalSlides = productCount - 3;
                }
            }
            
            // Setup carousel with current visible cards
            function setupCarousel() {
                // Calculate total slides based on visible cards
                // totalSlides = Math.max(1, Math.ceil(visibleCards.length / productsPerSlide));
                currentIndex = 0;
                
                // Clear existing dots
                dotsContainer.innerHTML = '';
                
                // Create new dots
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('div');
                    dot.classList.add('dot');
                    if (i === 0) dot.classList.add('active');
                    dot.dataset.index = i;
                    dotsContainer.appendChild(dot);
                }
            }
            
            // Update carousel position
            function updateCarousel() {
                const offset = -currentIndex * (100 / productsPerSlide);
                carouselTrack.style.transform = `translateX(${offset}%)`;
                
                // Update active dot
                const dots = document.querySelectorAll('.dot');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
            
            // Navigation functions
            function goToPrev() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }
            
            function goToNext() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }
            
            // Tab filtering
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    
                    const category = this.getAttribute('data-category');
                    
                    // Filter review cards and update visibility
                    reviewCards.forEach(card => {
                        if (category === 'all' || card.getAttribute('data-category').includes(category)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                    
                    // Update visible cards array
                    visibleCards = Array.from(reviewCards).filter(card => 
                        card.style.display !== 'none'
                    );
                    
                    // Reinitialize carousel with new visible cards
                    updateProductsPerSlide();
                    setupCarousel();
                    updateCarousel();
                });
            });
            
            // Dot click events
            dotsContainer.addEventListener('click', function(e) {
                if (e.target.classList.contains('dot')) {
                    currentIndex = parseInt(e.target.dataset.index);
                    updateCarousel();
                }
            });
            
            // Event listeners
            prevButton.addEventListener('click', goToPrev);
            nextButton.addEventListener('click', goToNext);
            
            // Handle window resize
            window.addEventListener('resize', function() {
                updateProductsPerSlide();
                setupCarousel();
                updateCarousel();
            });
            
            // Initialize carousel with filtered content
            const defaultActiveTab = document.querySelector('.tab.active');
            if (defaultActiveTab) {
                defaultActiveTab.click(); // Trigger tab logic **after** listeners are attached
            } else {
                initCarousel(); // fallback if no tab is pre-marked active
            }
        });
    </script>