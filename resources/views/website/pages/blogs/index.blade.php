@extends('website.app')

@section('title', 'Blogs')

@section('content')
@include('website.pages.blogs.sections.css')
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative">
                    <h2>Blog</h2>
                    <p>
                        Learn new skills, explore industry insights, and stay updated with practical knowledge that drives real results.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<div class="container py-5">
        <h2 class="sec-title mt-3 mb-5" style="
            text-align: center;
            font-size: 35px;
        ">Where Ideas Turn into Impactful Growth</h2>
        <div class="row g-5">
            <!-- BLOG POSTS (main column) -->
            <div class="col-lg-8">
                <div class="row g-4">
                    @if (isset($blogs) && count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <div class="col-md-6">
                                <div class="blog-card">
                                    <div class="position-relative">
                                        <img src="{{ asset($blog->main_image ?? 'uploads/blogs/default.png') }}" class="blog-card-img"
                                            alt="{{ $blog->title }}">
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-meta">
                                            <span>
                                                <i class="far fa-calendar-alt"></i> 
                                                {{ $blog->created_at->format('M d, Y') }}
                                            </span>
                                            <span><i class="far fa-clock"></i> 6 min read</span>
                                            </div>
                                        <h3 class="blog-title"><a href="{{ route('blogs.web', ['blogSlug' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                        <p class="blog-excerpt">{{ \Illuminate\Support\Str::limit($blog->meta_description, 150, '...') }}</p>
                                        <a href="{{ route('blogs.web', ['blogSlug' => $blog->slug]) }}" class="read-more-link">Read more <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No Blog Found</p>
                    @endif
                </div>
                
                <!-- Pagination -->
                @if ($blogs->hasPages())
                    <div class="d-flex justify-content-center mt-5">
                        <nav aria-label="Blog pagination">
                            <ul class="pagination pagination-custom">
                                @if ($blogs->onFirstPage())
                                    <li>
                                        <span class="page-item disabled">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a class="prev page-item" href="{{ $blogs->previousPageUrl() }}">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                @endif
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    <li>
                                        @if ($page == $blogs->currentPage())
                                            <li aria-current="page" class="page-item active">
                                                <a class="page-link" href="#">
                                                    {{ $page }}
                                                </a>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $url }}">
                                                    {{ $page }}
                                                </a>
                                            </li>
                                        @endif
                                    </li>
                                @endforeach
                                @if ($blogs->hasMorePages())
                                    <li>
                                        <a class="next page-item" href="{{ $blogs->nextPageUrl() }}">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <span class="page-item disabled">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                @endif
            </div>

            <!-- SIDEBAR (recent posts, newsletter) -->
            @include('website.pages.blogs.sections.sidebar')
        </div>
    </div>
@endsection