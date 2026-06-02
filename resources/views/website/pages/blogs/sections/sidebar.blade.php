<div class="col-lg-4">
    <!-- Search widget -->
    <!--<form action="{{ route('blogs.web') }}" method="GET">-->
    <!--    <div class="sidebar-widget">-->
    <!--        <h4 class="widget-title">Search</h4>-->
    <!--        <div class="search-input-group d-flex">-->
    <!--            <input  type="search" name="search" class="form-control" placeholder="Search blogs...">-->
    <!--            <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</form>-->

    <!-- Recent posts widget -->
    <div class="sidebar-widget">
        <h4 class="widget-title">Recent Posts</h4>
        @if (isset($relatedBlogs) && count($relatedBlogs) > 0)
            @foreach ($relatedBlogs as $relatedBlog)
                <div class="recent-post-item">
                    <img src="{{ asset($relatedBlog->main_image ?? 'uploads/blogs/default.png') }}" class="recent-img" alt="{{ $relatedBlog->title }}">
                    <div class="recent-content">
                        <h6><a href="{{ route('blogs.web', ['blogSlug' => $relatedBlog->slug]) }}">{{ \Illuminate\Support\Str::limit($relatedBlog->title, 50, '...') }}</a></h6>
                        <div class="recent-date"><i class="far fa-calendar-alt me-1"></i> {{ $relatedBlog->created_at->format('M d, Y') }}</div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No Related Blog Found</p>
        @endif
    </div>
    
    @if($isBlogDetail == 1)
        <div class="sidebar-widget">
            <h4 class="widget-title">Table of Contents</h4>
        
            @if(!empty($toc))
                <ul class="toc-list">
                    @foreach($toc as $item)
                        <li>
                            <a href="#{{ $item['id'] }}">
                                {!! $item['title'] !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endif

    <!-- Newsletter signup -->
    <!--<div class="sidebar-widget"-->
    <!--    style="background: linear-gradient(145deg, #F1F6FD, #FFFFFF); border-left: 4px solid var(--accent-orange);">-->
    <!--    <h4 class="widget-title">Stay Updated</h4>-->
    <!--    <p class="small text-muted">Get the latest insights and training resources delivered to your inbox.-->
    <!--    </p>-->
    <!--    <form class="newsletter-form" action="{{ route('subscribe.newsletter') }}" method="POST">-->
    <!--            @csrf-->
    <!--        <div class="mb-3">-->
    <!--            <input type="email" name="newsletter-email" class="form-control" placeholder="Your email address">-->
    <!--        </div>-->
    <!--        <button type="submit" class="btn btn-subscribe text-white">Subscribe <i-->
    <!--                class="fas fa-paper-plane ms-1"></i></button>-->
    <!--    </form>-->
    <!--</div>-->
</div>