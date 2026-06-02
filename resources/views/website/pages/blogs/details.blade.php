@extends('website.app')

@section('title', $blog->title)
@section('meta_title', $blog->meta_title)
@section('meta_description', $blog->meta_description)
@section('meta_keywords', $blog->meta_keywords)
@if($blog->main_image)
    @section('img_url', url($blog->main_image))
@endif

@section('content')
@include('website.pages.blogs.sections.css')
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative">
                    <h2>{{ $blog->title }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<div class="container py-5">
    @php
        $content = $blog->content;
    
        preg_match_all('/<h([2])>(.*?)<\/h[2]>/', $content, $matches);
    
        $toc = [];
    
        foreach ($matches[2] as $index => $heading) {
            $tag = $matches[1][$index]; // h2, h3, h4
            $id = \Illuminate\Support\Str::slug($heading);
    
            $toc[] = ['title' => $heading, 'id' => $id];
    
            $content = str_replace(
                $matches[0][$index],
                '<h'.$tag.' id="'.$id.'">'.$heading.'</h'.$tag.'>',
                $content
            );
        }
    @endphp
    @php
        $content = preg_replace_callback(
            '/<figure class="media">.*?<iframe.*?src="(.*?)".*?><\/iframe>.*?<\/figure>/s',
            function ($matches) {
        
                $src = $matches[1];
        
                return '
                <figure class="media">
                    <iframe 
                        src="'.$src.'"
                        loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </figure>';
            },
            $content
        );
    @endphp
    <div class="row g-5">
        <!-- BLOG POSTS (main column) -->
        <div class="col-lg-8">
            <!-- Featured Image -->
            @if($blog->main_image)
                <img src="{{ asset($blog->main_image) }}" class="img-fluid rounded-4 mb-4 shadow-sm"
                    alt="{{ $blog->title }}">
            @endif

            <article class="blog-content">
                {!! $content !!}

                <!-- Share section -->
                <!--<div-->
                <!--    class="border-top border-bottom py-3 my-4 d-flex justify-content-between align-items-center flex-wrap gap-2">-->
                <!--    <span class="fw-semibold">Share this article:</span>-->
                <!--    <div>-->
                <!--        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"-->
                <!--            class="btn btn-sm btn-outline-secondary rounded-circle mx-1">-->
                <!--            <i class="fab fa-facebook-f"></i>-->
                <!--        </a>-->
                
                <!--        <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(request()->fullUrl()) }}"-->
                <!--            class="btn btn-sm btn-outline-secondary rounded-circle mx-1">-->
                <!--            <i class="fab fa-twitter"></i>-->
                <!--        </a>-->
                
                <!--        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"-->
                <!--            class="btn btn-sm btn-outline-secondary rounded-circle mx-1">-->
                <!--            <i class="fab fa-linkedin-in"></i>-->
                <!--        </a>-->
                
                        <!-- ✅ Email Share -->
                <!--        <a href="mailto:?subject={{ urlencode($blog->title) }}&body={{ urlencode('Check out this article: ' . request()->fullUrl()) }}"-->
                <!--            class="btn btn-sm btn-outline-secondary rounded-circle mx-1">-->
                <!--            <i class="fas fa-envelope"></i>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
            </article>
            
            <div class="footer-cta-container">

                @if($blog->is_footer == '1')
                    <!-- Main Card -->
                    <div class="cta-card">
                        <h2>{{ $blog->footer_title }}</h2>
                
                        <p>
                            {{ $blog->footer_description }}
                        </p>
                
                        <a href="{{ $blog->footer_btn_link ?? '#' }}" class="cta-btn">{{ $blog->footer_btn_txt ?? 'Explore' }}</a>
                
                        <div class="cta-links">
                            <div><a href="https://youexceltraining.com">youexceltraining.com</a></div>
                        </div>
                    </div>
                @endif
            
                <!-- Share Section -->
                <div class="share-section">
                    <p>Found this helpful? Share it with someone who wants to start their journey.</p>
            
                    <div class="social-icons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/youexceltraining/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@youexceltraining"><i class="fab fa-youtube"></i></a>
                        <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}&description={{ urlencode($blog->title ?? 'Check this out') }}"><i class="fab fa-pinterest"></i></a>
                        <a href="https://wa.me/?text={{ urlencode(($blog->title ?? 'Check this out').': '.request()->fullUrl()) }}"><i class="fab fa-whatsapp"></i></a>
                    </div>
            
                    <div class="copyright">
                        © {{ date('Y') }} YouExcel Training | Karachi, Pakistan | youexceltraining.com
                    </div>
                </div>
            
            </div>

            <!-- Author bio -->
            <!--<div class="author-box">-->
            <!--    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="author" class="author-avatar">-->
            <!--    <div>-->
            <!--        <h5 class="mb-1">Dr. Sarah Mitchell</h5>-->
            <!--        <p class="text-muted small mb-2">Leadership Psychologist & Executive Coach</p>-->
            <!--        <p class="mb-0 small">Sarah has over 15 years of experience helping global organizations build-->
            <!--            resilient leadership pipelines. She is a regular contributor to Harvard Business Review and-->
            <!--            leads YouExcel’s EQ certification programs.</p>-->
            <!--    </div>-->
            <!--</div>-->

            <!-- Related posts (simple grid) -->
            @if (isset($relatedBlogs) && count($relatedBlogs) > 0)
                <div class="mt-5">
                    <h3 class="fw-bold mb-4">You might also like</h3>
                    <div class="row g-3">
                        @foreach ($relatedBlogs as $relatedBlog)
                            <div class="col-md-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset($relatedBlog->main_image ?? 'uploads/blogs/default.png') }}" class="card-img-top rounded-top-3"
                                        alt="{{ $relatedBlog->title }}">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold" style="font-size: 15px;"><a href="{{ route('blogs.web', ['blogSlug' => $relatedBlog->slug]) }}"
                                                class="text-decoration-none text-dark">{{ $relatedBlog->title }}</a></h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Comments section -->
            <div class="comment-area mt-5">
                <h3 class="fw-bold mb-4">
                    Comments ({{ $blog->blog_comments_count }})
                </h3>
                @if (isset($blogComments) && count($blogComments) > 0)
                    @foreach ($blogComments as $comment)
                        <div class="comment-item">
                            <div class="comment-avatar"><i class="fas fa-user"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">
                                    {{ $comment->name }}
                                </h6>
                                <small class="text-muted">
                                    {{ $comment->created_at->format('M d, Y') }}
                                </small>
                                <p class="mt-2 mb-0">{{ $comment->message }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif

                <h4 class="fw-bold mt-5 mb-3">Leave a comment</h4>
                <form action="{{ route('blogs.comment.submit') }}" method="POST">
                    @csrf
                    <input type="text" name="blog_id" value="{{ $blog->id }}" hidden>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Write your comment..."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn"
                                style="background: var(--primary-dark); color: white; border-radius: 40px; padding: 0.5rem 2rem;">Post
                                Comment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- SIDEBAR (recent posts, newsletter) -->
        @include('website.pages.blogs.sections.sidebar')
    </div>
</div>

<script>
document.querySelectorAll(".toc-list a").forEach(function(anchor) {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();

        let targetId = this.getAttribute("href").replace("#", "");
        let targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: "smooth"
            });
        } else {
            console.warn("Target not found:", targetId);
        }
    });
});
</script>
@endsection