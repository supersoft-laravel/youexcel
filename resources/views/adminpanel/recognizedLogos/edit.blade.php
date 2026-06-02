@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Recognized Logo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('recognized-logos.index') }}">Recognized Logos</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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

            <form method="POST" action="{{ route('recognized-logos.update', $recognizedLogo->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" required value="{{ $recognizedLogo->title }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Logo <small>(500 x 500)</small></label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image">
                            @if($recognizedLogo->image)
                                <img src="{{ asset($recognizedLogo->image) }}" alt="image" class="mt-2" width="120">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description<span style="color: red;">*</span></label>
                            <textarea class="form-control" name="description" id="description">{{ $recognizedLogo->description }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </section>
</div>

@endsection
