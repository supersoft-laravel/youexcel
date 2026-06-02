<style>
    .video-section .container {
        max-width: 1200px;
        width: 100%;
        /*background: white;*/
        border-radius: 20px;
        /*box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);*/
        overflow: hidden;
        position: relative;
    }

    .video-section header {
        background: linear-gradient(90deg, #1a4480, #2a5a9c);
        color: white;
        padding: 30px 40px;
        text-align: center;
    }

    .video-section h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .video-section .subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
        max-width: 700px;
        margin: 0 auto;
    }

    .video-section .testimonial-count {
        background: rgba(255, 255, 255, 0.2);
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 1.1rem;
        margin-top: 15px;
        display: inline-block;
    }

    .video-section .video-carousel {
        padding: 40px 20px;
        position: relative;
    }

    .video-section .carousel-container {
        position: relative;
        overflow: hidden;
        margin: 0 auto;
        max-width: 1000px;
        border-radius: 15px;
    }

    .video-section .video-carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .video-section .video-carousel-item {
        min-width: 100%;
        display: flex;
        padding: 10px;
        gap: 20px;
    }

    .video-section .video-card {
        flex: 1;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
    }

    .video-section .video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .video-section .video-thumbnail {
        position: relative;
        height: 250px;
        border-radius: 15px 15px 0 0;
        overflow: hidden;
    }

    .video-section .video-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .video-section .video-card:hover .video-thumbnail img {
        transform: scale(1.05);
    }

    .video-section .video-play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background: rgba(255, 0, 0, 0.8);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .video-section .video-play-btn:hover {
        background: #ff0000;
        transform: translate(-50%, -50%) scale(1.1);
    }

    .video-section .video-play-btn i {
        font-size: 24px;
        color: white;
        margin-left: 5px;
    }

    .video-section .video-info {
        padding: 15px;
        text-align: center;
    }

    .video-section .video-info h3 {
        font-size: 1.1rem;
        color: #1a4480;
        margin-bottom: 5px;
    }

    .video-section .video-info p {
        font-size: 0.9rem;
        color: #718096;
        margin-bottom: 10px;
    }

    .video-section .duration {
        display: inline-block;
        background: #ff9800;
        color: white;
        padding: 3px 10px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .video-section .carousel-nav {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        gap: 15px;
    }

    .video-section .carousel-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #1a4480;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        font-size: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .video-section .carousel-btn:hover {
        background: #4caf50;
        transform: scale(1.1);
    }

    .video-section .carousel-indicators {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    .video-section .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #718096;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .video-section .indicator.active {
        background: #1a4480;
        transform: scale(1.2);
    }

    .video-section .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 1000;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .video-section .modal.active {
        display: flex;
        opacity: 1;
    }

    .video-section .modal-content {
        width: 90%;
        max-width: 900px;
        position: relative;
    }

    .video-section .close-btn {
        position: absolute;
        top: -50px;
        right: 0;
        width: 40px;
        height: 40px;
        background: rgba(255, 0, 0, 0.7);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
    }

    .video-section .close-btn:hover {
        background: rgba(255, 0, 0, 1);
        transform: rotate(90deg);
    }

    .video-section .close-btn i {
        font-size: 20px;
        color: white !important;
        margin-right: 0px !important;
    }

    .video-section .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7);
    }

    .video-section .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .video-section .counter {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        z-index: 5;
    }

    /* Responsive styles */
    @media (max-width: 992px) {
        .video-section .video-card {
            flex: 0 0 calc(50% - 10px);
        }

        .video-section .video-carousel-item {
            min-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .video-section .video-thumbnail {
            height: 200px;
        }

        .video-section h1 {
            font-size: 2rem;
        }

        .video-section .subtitle {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .video-section .video-card {
            flex: 0 0 100%;
        }

        .video-section .video-thumbnail {
            height: 180px;
        }

        .video-section .video-play-btn {
            width: 50px;
            height: 50px;
        }

        .video-section .video-play-btn i {
            font-size: 20px;
        }

        .video-section h1 {
            font-size: 1.8rem;
        }

        .video-section header {
            padding: 20px;
        }
    }
</style>

<div class="video-section">
        <div class="container text-center">
            <div class="row vs-carousel wow fadeInUp responsive" data-wow-delay="0.4s" data-slide-show="3"
                data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
                <div class="col-auto">
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="7CGksxv0lR8">
                            <img src="https://img.youtube.com/vi/7CGksxv0lR8/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">1/8</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- Video 2 -->
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="VAyIJXmERuY">
                            <img src="https://img.youtube.com/vi/VAyIJXmERuY/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">2/8</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- Video 3 -->
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="R51mS8pd3Y0">
                            <img src="https://img.youtube.com/vi/R51mS8pd3Y0/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">3/8</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- Video 4 -->
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="mYb1h9I998c">
                            <img src="https://img.youtube.com/vi/mYb1h9I998c/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">4/8</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- Video 5 -->
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="5I0FlLvEmZQ">
                            <img src="https://img.youtube.com/vi/5I0FlLvEmZQ/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">5/8</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- Video 6 -->
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="g0GF3KUtXyM">
                            <img src="https://img.youtube.com/vi/g0GF3KUtXyM/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">6/8</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- Video 7 -->
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="CVQo-ahu5M8">
                            <img src="https://img.youtube.com/vi/CVQo-ahu5M8/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">7/8</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- Video 8 -->
                    <div class="video-card">
                        <div class="video-thumbnail" data-video="iMC_nP--TgQ">
                            <img src="https://img.youtube.com/vi/iMC_nP--TgQ/maxresdefault.jpg" alt="Excel testimonial">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="counter">8/8</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal" id="videoModal">
            <div class="modal-content">
                <div class="close-btn">
                    <i class="fas fa-times"></i>
                </div>
                <div class="video-container">
                    <iframe id="youtubeVideo" src=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Video modal functionality
            const videoThumbnails = document.querySelectorAll('.video-thumbnail');
            const videoModal = document.getElementById('videoModal');
            const youtubeVideo = document.getElementById('youtubeVideo');
            const closeBtn = document.querySelector('.close-btn');

            // Open modal when video is clicked
            videoThumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', () => {
                    const videoId = thumbnail.getAttribute('data-video');
                    youtubeVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&start=0&end=30`;

                    // Show modal
                    videoModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            });

            // Close modal
            closeBtn.addEventListener('click', () => {
                videoModal.classList.remove('active');
                youtubeVideo.src = '';
                document.body.style.overflow = 'auto';
            });

            // Close modal when clicking outside content
            videoModal.addEventListener('click', (e) => {
                if (e.target === videoModal) {
                    videoModal.classList.remove('active');
                    youtubeVideo.src = '';
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>