@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Trusted Company Categories</h1>
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
            <form method="POST" action="{{ route('trusted-company-categories.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-lg-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            @error('name') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
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
                        <th scope="col">Category</th>
                        @canany(['delete trusted company', 'update trusted company'])
                            <th scope="col">{{ __('Action') }}</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $index => $category)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        @canany(['delete trusted company', 'update trusted company'])
                        <td class="d-flex" style="gap: 10px;">
                            <form action="{{ route('trusted-company-categories.destroy', $category->id) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @method('DELETE')
                                @csrf
                            
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash fa-md"></i>
                                </button>
                            </form>
                            <a href="{{ route('trusted-company-categories.edit', $category->id) }}"
                                class="btn btn-success btn-sm">
                                Edit
                            </a>
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
