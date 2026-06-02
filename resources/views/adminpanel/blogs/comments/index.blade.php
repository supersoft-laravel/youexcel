@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Comments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blogs</a></li>
                        <li class="breadcrumb-item active">Comments</li>
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
                    <h4>Comments Table</h4>
                    @canany(['create blog'])
                    <a href="{{ route('blogs.comments.create', $blog->id) }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add Comment
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>Status</th>
                            @canany(['update blog'])
                                <th scope="col">{{ __('Action') }}</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogComments as $index => $comment)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->message }}</td>
                            <td>
                                <span class="text-nowrap">
                                    @canany(['update blog'])
                                    <a href="{{ route('blogs.comments.status.update', $comment->id) }}"
                                        class="btn btn-outline-primary btn-sm me-1"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="{{ $comment->is_active == 'active' ? __('Deactivate Blog Comment') : __('Activate Blog Comment') }}">
                                
                                        @if ($comment->is_active == 'active')
                                            <i class="fas fa-check-circle text-success"></i> <span class="text-success">Active</span>
                                        @else
                                            <i class="fas fa-times-circle text-danger"></i> <span class="text-danger">Inactive</span>
                                        @endif
                                
                                    </a>
                                    @else
                                        @if ($comment->is_active == 'active')
                                            <i class="fas fa-check-circle text-success"></i> <span class="text-success">Active</span>
                                        @else
                                            <i class="fas fa-times-circle text-danger"></i> <span class="text-danger">Inactive</span>
                                        @endif
                                    @endcan
                                </span>
                            </td>
                            @canany(['update blog'])
                            <td>
                                <form action="{{ route('blogs.comments.delete', $comment->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure you want to delete this comment?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                <a class="btn btn-sm btn-primary" href="{{ route('blogs.comments.edit', $comment->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            @endcan
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No comments found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@endsection
