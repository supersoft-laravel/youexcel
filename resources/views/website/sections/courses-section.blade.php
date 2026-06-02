<style>
    /* ===== CONTAINER ===== */

    .deals-container .deals-container {
        width: 100%;
        max-width: 1200px;
        margin: auto;
        padding: 40px 5px;
    }

    .deals-container .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .deals-container .header h2 {
        font-size: 26px;
        font-weight: 700;
    }

    .deals-container .header-nav {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #fff;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        cursor: pointer;
    }

    /* ===== CAROUSEL ===== */

    .deals-container .carousel-wrapper {
        overflow: hidden;
    }

    .deals-container .carousel-track {
        display: flex;
        transition: 0.4s ease;
    }

    /* ===== COURSE CARD DESIGN ===== */

    .deals-container .product-card {
        flex: 0 0 calc(33.33% - 20px);
        margin: 0 10px;
        background: #fff;
        border-radius: 14px;
        padding: 22px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        display: flex;
        flex-direction: column;
        transition: 0.3s;
    }

    .deals-container .product-card:hover {
        transform: translateY(-6px);
    }

    /* Top */

    .deals-container .card-top {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .deals-container .difficulty {
        font-weight: 600;
        color: #444;
    }

    .deals-container .rating i {
        font-size: 14px;
        margin-left: 2px;
        color: #f4b400;
    }

    /* Image */

    .deals-container .card-image img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 18px;
    }

    /* Title */

    .deals-container .course-name {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 12px;
        min-height: 55px;
    }

    /* Meta */

    .deals-container .course-meta {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        margin-bottom: 12px;
        color: #555;
    }

    .deals-container .course-meta i {
        margin-right: 5px;
    }

    /* Price */

    .deals-container .price {
        font-size: 24px;
        font-weight: 700;
        margin: 15px 0;
    }

    /* Button */

    .deals-container .view-btn {
        margin-top: auto;
        display: block;
        text-align: center;
        padding: 14px;
        border-radius: 30px;
        background: linear-gradient(90deg, #0f2027, #203a43);
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .deals-container .view-btn:hover {
        background: linear-gradient(90deg, #203a43, #0f2027);
    }

    .deals-container .carousel-dots {
        display: flex;
        justify-content: center;
        margin-top: 25px;
    }

    .deals-container .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ddd;
        margin: 0 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .deals-container .dot.active {
        background: #3498db;
        transform: scale(1.2);
    }

    /* ===== RESPONSIVE ===== */

    @media(max-width:1024px) {
        .deals-container .product-card {
            flex: 0 0 calc(33.33% - 20px);
        }
    }

    @media (max-width: 768px) {
        .deals-container .product-card {
            flex: 0 0 calc(50% - 20px);
        }
    }

    @media(max-width:480px) {
        .deals-container .product-card {
            flex: 0 0 calc(100% - 20px);
        }
    }
</style>

<div class="deals-container">

    <div class="header">
        <h2></h2>
        <div>
            <button class="header-nav header-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="header-nav header-next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <div class="carousel-wrapper">
        @if (isset($courses) && count($courses) > 0)  
            <div class="carousel-track" id="carouselTrack">
                @foreach ($courses as $course)
                    <div class="product-card">

                        <div class="card-top">
                            <div class="difficulty">{{ $course->difficulty ?? 'Beginners to Intermediate' }}</div>
                            @php
                                $rating = (float) ($course->rating ?? 0);
                            @endphp
                            <div class="rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($rating >= $i)
                                        <i class="fa-solid fa-star star-filled"></i>
                                    @elseif ($rating >= $i - 0.5)
                                        <i class="fa-solid fa-star-half-stroke star-filled"></i>
                                    @else
                                        <i class="fa-regular fa-star star-empty"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>

                        <div class="card-image">
                            <img src="{{ $course->image_url ? asset($course->image_url) : 'img/courses/default.png' }}"
                                    alt="{{ $course->coursename }}">
                        </div>

                        <div class="course-name">{{ $course->coursename }}</div>

                        <div class="course-meta">
                            <span><i class="fa-regular fa-circle-play"></i> {{ $course->sessions ?? '0' }}
                                    Sessions</span>
                            <span><i class="fa-regular fa-clock"></i> {{ $course->duration ?? '0' }} Hours</span>
                        </div>

                        <hr>

                        <div class="price">RS.{{ $course->lump_sum_fee ?? 0 }}</div>

                        <a href="{{ route('course.details', $course->slug) }}" class="view-btn">View Details</a>

                    </div>
                @endforeach

            </div>
        @else
            <div class="col-12">
                <div class="alert alert-info text-center" role="alert">
                    No courses available at the moment. Please check back later.
                </div>
            </div>
        @endif
    </div>
    <div class="carousel-dots" id="carouselDots"></div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

    const carouselTrack = document.getElementById('carouselTrack');
    const prevButton = document.querySelector('.header-prev');
    const nextButton = document.querySelector('.header-next');
    const dotsContainer = document.getElementById('carouselDots');

    const products = document.querySelectorAll('.product-card');
    const productCount = products.length;

    let productsPerSlide = 3; // default desktop
    let currentIndex = 0;
    let totalSlides = 0;

    function initCarousel() {

        if (window.innerWidth <= 1024 && window.innerWidth > 768) {
            productsPerSlide = 2; // tablet
        } else if (window.innerWidth <= 768 && window.innerWidth > 480) {
            productsPerSlide = 2; // small tablet
        } else if (window.innerWidth <= 480) {
            productsPerSlide = 1; // mobile
        } else {
            productsPerSlide = 3; // desktop
        }

        // Total slides = number of cards minus visible cards + 1 (for sliding 1 card at a time)
        totalSlides = productCount - productsPerSlide + 1;
        if(totalSlides < 1) totalSlides = 1;
        currentIndex = 0;

        // Create dots
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.dataset.index = i;
            dotsContainer.appendChild(dot);
        }

        updateCarousel();
    }

    function updateCarousel() {
        const cardWidth = products[0].offsetWidth + 20; // 20px = margin
        const offset = -currentIndex * cardWidth;
        carouselTrack.style.transform = `translateX(${offset}px)`;

        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    function goToPrev() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }

    function goToNext() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
    }

    prevButton.addEventListener('click', goToPrev);
    nextButton.addEventListener('click', goToNext);

    dotsContainer.addEventListener('click', function (e) {
        if (e.target.classList.contains('dot')) {
            currentIndex = parseInt(e.target.dataset.index);
            updateCarousel();
        }
    });

    window.addEventListener('resize', initCarousel);

    initCarousel();
});
</script>