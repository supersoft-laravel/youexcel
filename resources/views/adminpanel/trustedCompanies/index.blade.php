@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Trusted Companies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Trusted Companies</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .table{
            overflow-x: auto;
        }
    </style>

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
            @canany(['create trusted company'])
            <form method="POST" action="{{ route('trusted-companies.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">
                                Category<span style="color: red;">*</span>
                            </label>
                            <select class="form-control" name="category_id" id="category_id" required>
                                <option value="" selected disabled>Select Category</option>
                                @if(isset($categories) && count($categories) > 0)
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="logo" class="form-label">Image <small>(625 x 360)</small><span style="color: red;">*</span></label>
                            <input type="file" accept="image/*" class="form-control" name="logo" id="logo" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                    <div class="col-lg-3">
                    <a class="btn btn-warning mx-2" href="{{ route('trusted-companies.shuffle-show') }}">Shuffle Companies</a>
                    </div>
                </div>

            </form>
            @endcan
            <!-- form End  -->
            
            <hr class="my-5">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Status</th>
                        @canany(['delete trusted company', 'update trusted company'])
                            <th scope="col">{{ __('Action') }}</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($trustedCompanies as $index => $trustedCompany)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $trustedCompany->name }}</td>
                        <td>{{ $trustedCompany->category ? ucfirst($trustedCompany->category->name) : 'N/A' }}</td>
                        <td>
                            @if ($trustedCompany->logo)
                                <img style="height: 40px;" src="{{ asset($trustedCompany->logo) }}" alt="Image">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($trustedCompany->is_active == '1')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        @canany(['delete trusted company', 'update trusted company'])
                        <td class="d-flex gap-2">
                            @canany(['update trusted company'])
                            <a href="{{ route('trusted-companies.status.update', $trustedCompany->id) }}"
                                class="btn btn-danger btn-sm mx-2">
                                @if ($trustedCompany->is_active == '1')
                                    Deactivate
                                @else
                                    Activate
                                @endif
                            </a>
                            <a href="{{ route('trusted-companies.edit', $trustedCompany->id) }}"
                                class="btn btn-success btn-sm mx-2">
                                Edit
                            </a>
                            @endcan
                            @canany(['delete trusted company'])
                            <form action="{{ route('trusted-companies.destroy', $trustedCompany->id) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this company?');">
                                @method('DELETE')
                                @csrf
                            
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash fa-md"></i>
                                </button>
                            </form>
                            @endcan
                        </td>
                        @endcan

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>

@endsection
