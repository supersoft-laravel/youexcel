@extends('adminpanel.app')

@section('content')
<style>
    .sortable {
        min-height: 100px;
    }

    .sortable li {
        cursor: grab;
        transition: transform 0.2s, box-shadow 0.2s;
        border-left: 4px solid transparent;
    }

    .sortable li:hover {
        transform: translateX(5px);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .sortable li.sortable-ghost {
        opacity: 0.5;
        background: #f8f9fa;
        border-left-color: #7367f0;
    }

    .sortable li.sortable-dragging {
        cursor: grabbing;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        z-index: 1000;
    }

    .drag-handle {
        cursor: grab;
        margin-right: 12px;
        color: #7367f0;
        transition: transform 0.2s;
    }

    .drag-handle:hover {
        transform: scale(1.2);
    }
</style>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Shuffle Recognized Logos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('recognized-logos.index') }}">Recognized Logos</a></li>
                        <li class="breadcrumb-item active">Shuffle</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Shuffle Recognized Logos</h5>
            </div>
            <div class="card-body row">
                <div class="col-md-12">
                    <div class="demo-inline-spacing mt-4">
                        <ul class="list-group sortable">
                            @foreach ($recognizedLogos as $recognizedLogo)
                                <li class="list-group-item d-flex justify-content-between align-items-center"
                                    data-id="{{ $recognizedLogo->id }}">
                                    <div>
                                        <i class="fas fa-grip-lines drag-handle"></i>
                                        <span class="badge me-4 bg-label-{{ $recognizedLogo->is_active == '1' ? 'success' : 'danger' }}">
                                            {{ $recognizedLogo->is_active == '1' ? 'Active' : 'Inactive' }}
                                        </span>
                                        <span class="service-name">{{ $recognizedLogo->title }}</span>
                                    </div>
                                    <span
                                        class="badge badge-center bg-primary position-badge">{{ $recognizedLogo->position }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $(".sortable").sortable({
            update: function(event, ui) {
                let orderedIDs = [];
                $('.sortable li').each(function(index) {
                    orderedIDs.push($(this).data('id'));
                });

                $.ajax({
                    url: '{{ route('recognized-logos.shuffle-store') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        ids: orderedIDs
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Logo Position Updated',
                            text: response.message ?? 'Recognized Logos order updated successfully',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        location.reload();
                    }
                });
            }
        });
    });
</script>



@endsection
