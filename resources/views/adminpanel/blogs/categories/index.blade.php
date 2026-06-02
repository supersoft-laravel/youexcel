@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
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
                    <h4>Categories Table</h4>
                    <a href="{{ route('blog-categories.create') }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add Category
                    </a>
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogCategories as $index => $category)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <span class="text-nowrap">
                                    <a href="{{ route('blog-categories.status.update', $category->id) }}"
                                        class="btn btn-outline-primary btn-sm me-1"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="{{ $category->is_active == 'active' ? __('Deactivate Blog Category') : __('Activate Blog Category') }}">
                                
                                        @if ($category->is_active == 'active')
                                            <i class="fas fa-check-circle text-success"></i> <span class="text-success">Active</span>
                                        @else
                                            <i class="fas fa-times-circle text-danger"></i> <span class="text-danger">Inactive</span>
                                        @endif
                                
                                    </a>
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('blog-categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                <a class="btn btn-sm btn-primary" href="{{ route('blog-categories.edit', $category->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No events found.</td>
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
