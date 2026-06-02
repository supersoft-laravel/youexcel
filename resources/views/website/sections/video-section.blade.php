<style>
    .video-card {
        flex: 1;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
    }

    .video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .video-thumbnail {
        position: relative;
        height: 250px;
        border-radius: 15px 15px 0 0;
        overflow: hidden;
    }

    .video-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .video-card:hover .video-thumbnail img {
        transform: scale(1.05);
    }

    .video-play-btn {
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

    .video-play-btn:hover {
        background: #ff0000;
        transform: translate(-50%, -50%) scale(1.1);
    }

    .video-play-btn i {
        font-size: 24px;
        color: white !important;
        margin-left: 5px;
        margin-right: 0px !important;
    }
    
    .modal {
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

    .modal.active {
        display: flex;
        opacity: 1;
    }

    .modal-content {
        width: 90%;
        max-width: 900px;
        position: relative;
    }

    .close-btn {
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

    .close-btn:hover {
        background: rgba(255, 0, 0, 1);
        transform: rotate(90deg);
    }

    .close-btn i {
        font-size: 20px;
        color: white !important;
        margin-right: 0px !important;
    }

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7);
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
    /* Responsive styles */
    @media (max-width: 992px) {
        .video-card {
            flex: 0 0 calc(50% - 10px);
        }
    }

    @media (max-width: 768px) {
        .video-thumbnail {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .video-card {
            flex: 0 0 100%;
        }

        .video-thumbnail {
            height: 180px;
        }

        .video-play-btn {
            width: 50px;
            height: 50px;
        }

        .video-play-btn i {
            font-size: 20px;
        }
    }
</style>
<div class="video-card">
    <div class="video-thumbnail" data-video="{{ $videoId }}">
        <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg" alt="Video thumbnail">
        <div class="video-play-btn">
            <i class="fas fa-play"></i>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');
    const videoModal = document.getElementById('videoModal');
    const youtubeVideo = document.getElementById('youtubeVideo');
    const closeBtn = document.querySelector('.close-btn');

    videoThumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            const videoId = thumbnail.getAttribute('data-video');
            youtubeVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&start=0`;
            videoModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    closeBtn.addEventListener('click', () => {
        videoModal.classList.remove('active');
        youtubeVideo.src = '';
        document.body.style.overflow = 'auto';
    });

    videoModal.addEventListener('click', (e) => {
        if (e.target === videoModal) {
            videoModal.classList.remove('active');
            youtubeVideo.src = '';
            document.body.style.overflow = 'auto';
        }
    });
});
</script>
