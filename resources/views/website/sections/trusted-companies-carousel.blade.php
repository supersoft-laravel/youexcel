<style>
    .logo-carousel img {
        width: 200px;
        height: 100px;
        object-fit: contain;
        display: block;
        margin: auto;
    }

    .logo-carousel .col-auto {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        width: 100px;
    }

    /* Wrapper */
    .carousel-wrapper {
        position: relative;
    }

    /* Buttons */
    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
        border: none;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        cursor: pointer;
        z-index: 10;
        transition: 0.3s;
    }

    .carousel-btn:hover {
        background: #007bff;
        color: #fff;
    }

    .prev-btn {
        left: -20px;
    }

    .next-btn {
        right: -20px;
    }

    .carousel-btn i {
        font-size: 18px;
    }

    /* Mobile hide */
    @media (max-width: 768px) {
        .carousel-btn {
            display: none;
        }
    }
</style>

@php
    $trustedCompanies = App\Models\TrustedCompany::where('is_active', '1')->orderByRaw('CAST(position AS UNSIGNED) ASC')->get();
@endphp

@if(isset($trustedCompanies) && count($trustedCompanies) > 0)

<div class="space-top space-extra-bottom">
    <div class="container text-center">
        <h2 class="sec-subtitle2" style="font-size:35px;">
            Trusted by Pakistan's Top Companies
        </h2>

        <div class="carousel-wrapper">

            <!-- PREV BUTTON -->
            <button class="carousel-btn prev-btn">
                <i class="fas fa-chevron-left"></i>
            </button>

            <!-- CAROUSEL -->
            <div class="row vs-carousel wow fadeInUp logo-carousel"
                 data-wow-delay="0.4s"
                 data-slide-show="5"
                 data-lg-slide-show="3"
                 data-md-slide-show="3"
                 data-sm-slide-show="2">

                @foreach($trustedCompanies as $trustedCompany)
                    <div class="col-auto">
                        <img src="{{ asset($trustedCompany->logo) }}" alt="{{ $trustedCompany->name }}">
                    </div>
                @endforeach

            </div>

            <!-- NEXT BUTTON -->
            <button class="carousel-btn next-btn">
                <i class="fas fa-chevron-right"></i>
            </button>

        </div>
    </div>
</div>

@endif

<script>
    $(document).ready(function(){

        // IMPORTANT: vs-carousel already initialized hai
        var slider = $('.logo-carousel');

        // Custom Buttons (FIXED)
        $('.prev-btn').on('click', function(){
            slider.slick('slickPrev');
        });

        $('.next-btn').on('click', function(){
            slider.slick('slickNext');
        });

    });
</script>