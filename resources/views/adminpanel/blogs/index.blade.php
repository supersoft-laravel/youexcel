@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blogs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blogs</li>
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
                    <h4>Blogs Table</h4>
                    @canany(['create blog'])
                    <a href="{{ route('blogs.create') }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add Blog
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
                            <th>Category</th>
                            <th>Status</th>
                            @canany(['delete blog', 'update blog', 'view blog'])
                                <th scope="col">{{ __('Action') }}</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $index => $blog)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($blog->title, 40, '...') }}</td>
                            <td>{{ $blog->category ? $blog->category->name : 'N/A' }}</td>
                            <td>
                                <span class="text-nowrap">
                                    @canany(['update blog'])
                                    <a href="{{ route('blogs.status.update', $blog->id) }}"
                                        class="btn btn-outline-primary btn-sm me-1"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="{{ $blog->is_active == 'active' ? __('Deactivate Blog') : __('Activate Blog') }}">
                                
                                        @if ($blog->is_active == 'active')
                                            <i class="fas fa-check-circle text-success"></i> <span class="text-success">Active</span>
                                        @else
                                            <i class="fas fa-times-circle text-danger"></i> <span class="text-danger">Inactive</span>
                                        @endif
                                    </a>
                                    @else
                                        @if ($blog->is_active == 'active')
                                            <i class="fas fa-check-circle text-success"></i> <span class="text-success">Active</span>
                                        @else
                                            <i class="fas fa-times-circle text-danger"></i> <span class="text-danger">Inactive</span>
                                        @endif
                                    @endcan
                                </span>
                            </td>
                            @canany(['delete blog', 'update blog', 'view blog'])
                            <td>
                                @canany(['delete blog'])
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure you want to delete this blog?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                @endcan
                                @canany(['update blog'])
                                <a class="btn btn-sm btn-primary" href="{{ route('blogs.edit', $blog->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @endcan
                                <a class="btn btn-sm btn-primary position-relative"
                                   href="{{ route('blogs.comments.index', $blog->id) }}">
                                
                                    <i class="fas fa-comments"></i>
                                
                                    @if($blog->blog_comments_count > 0)
                                        <sup class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            {{ $blog->blog_comments_count }}
                                        </sup>
                                    @endif
                                
                                </a>
                            </td>
                            @endcan
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No blogs found.</td>
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
