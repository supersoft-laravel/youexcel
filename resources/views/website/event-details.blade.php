@extends('website.app', ['title' => $event->title])

@section('meta_description', Str::limit($event->description, 150, '...'))
@section('meta_keywords', 'event, ' . $event->title)

@section('content')
<!-- Breadcrumb -->
<div class="breadcumb-wrapper " data-bg-src="">
    <div class="container z-index-common">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Event Details</h1>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <article>
                    <header class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="display-5 fw-bold mb-0">{{ $event->title }}</h1>
                        </div>
                        
                        @if($event->main_image)
                        <img src="{{ asset($event->main_image) }}" alt="{{ $event->title }}" 
                             class="img-fluid rounded-3 shadow-sm mb-4">
                        @endif

                        <div class="d-flex gap-4 text-muted">
                            <div>
                                <i class="bi bi-calendar-event me-2"></i>
                                {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}
                            </div>
                        </div>
                    </header>

                    <!-- Event Details -->
                    <section class="mb-5">
                        @if($event->description)
                        <h2 class="h4 mb-3 border-bottom pb-2">Event Description</h2>
                        <div class="lead mb-4">{!! $event->description !!}</div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h3 class="h5 card-title">Event Summary</h3>
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <strong>Posted:</strong> 
                                                {{ $event->created_at->diffForHumans() }}
                                            </li>
                                            <li class="mb-2">
                                                <strong>Last Updated:</strong> 
                                                {{ $event->updated_at->diffForHumans() }}
                                            </li>
                                            <li>
                                                <strong>Status:</strong> 
                                                <span class="text-capitalize">{{ $event->status }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h3 class="h5 card-title mb-3">Event Quick Info</h3>
                            <dl class="row">
                                <dt class="col-sm-5">Date</dt>
                                <dd class="col-sm-7">
                                    {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}
                                </dd>

                                <dt class="col-sm-5">Status</dt>
                                <dd class="col-sm-7 text-capitalize">
                                    {{ $event->status }}
                                </dd>

                                <dt class="col-sm-5">Published</dt>
                                <dd class="col-sm-7">
                                    {{ $event->created_at->diffForHumans() }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>
@endsection