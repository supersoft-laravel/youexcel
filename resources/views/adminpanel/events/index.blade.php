@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Events</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Events</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="container mt-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Events Table</h4>
                    @canany(['create event'])
                        <a href="{{ route('events.create') }}" class="btn btn-success">
                            <i class="fas fa-plus"></i> Add Event
                        </a>
                    @endcan
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>S.NO</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Date</th>
                            @canany(['delete event', 'update event'])
                                <th scope="col">{{ __('Action') }}</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $index => $event)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $event->title }}</td>
                            <td>
                                @if($event->main_image)
                                    <img src="{{ asset($event->main_image) }}" alt="Image" width="80" height="60">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}</td>
                            @canany(['delete event', 'update event'])
                            <td>
                                @canany(['delete event'])
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure you want to delete this event?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                @endcan
                                @canany(['update event'])
                                <a class="btn btn-sm btn-primary" href="{{ route('events.edit', $event->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @endcan
                            </td>
                            @endcan
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No events found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $events->links() }}
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@endsection
