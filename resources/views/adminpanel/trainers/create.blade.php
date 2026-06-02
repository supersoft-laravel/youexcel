@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Trainer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('trainers.index') }}">Trainers</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
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
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Trainer Details</h3>
                </div>

                <form action="{{ route('trainers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body row">

                        <div class="form-group col-md-6">
                            <label for="name">Name</label><span class="text-danger">*</span>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter name" value="{{ old('name') }}" required>
                            @error('name') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="slug">Slug</label><span class="text-danger">*</span>
                            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                                placeholder="Enter slug" value="{{ old('slug') }}" required>
                            @error('slug') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="experience">Experience <small>(write no of years)</small></label><span class="text-danger">*</span>
                            <input type="number" name="experience" min="0" class="form-control @error('experience') is-invalid @enderror"
                                placeholder="Enter experience" value="{{ old('experience') }}" required>
                            @error('experience') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="rating">Rating <small>(rate from 1 to 5)</small></label>
                            <input type="number" name="rating" min="0" step="0.1" max="5" class="form-control @error('rating') is-invalid @enderror"
                                placeholder="Enter rating" value="{{ old('rating') }}">
                            @error('rating') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Picture -->
                        <div class="form-group col-md-6">
                            <label for="picture">Picture</label>
                            <input type="file" name="picture" class="form-control-file @error('picture') is-invalid @enderror" accept="image/*">
                            @error('picture') 
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                placeholder="Enter phone" value="{{ old('phone') }}">
                            @error('phone') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="linkedin">Linkedin URL</label>
                            <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror"
                                placeholder="Enter linkedin url" value="{{ old('linkedin') }}">
                            @error('linkedin') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="facebook">Facebook URL</label>
                            <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror"
                                placeholder="Enter facebook url" value="{{ old('facebook') }}">
                            @error('facebook') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="instagram">Instagram URL</label>
                            <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror"
                                placeholder="Enter instagram url" value="{{ old('instagram') }}">
                            @error('instagram') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="bio">Bio</label><span class="text-danger">*</span>
                            <input type="text" name="bio" class="form-control @error('bio') is-invalid @enderror"
                                placeholder="Enter bio" value="{{ old('bio') }}" required>
                            @error('bio') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea name="description" rows="5"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="Enter description">{{ old('description') }}</textarea>
                            @error('description') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label>
                                Certifications
                                <button type="button" class="btn btn-sm btn-success ml-2" id="addCert">
                                    <i class="fas fa-plus"></i> Add New
                                </button>
                            </label>
                        
                            <div id="certWrapper">
                                <div class="input-group mb-2 cert-item">
                                    <input type="text" name="certifications[]" class="form-control" placeholder="Enter certification">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger removeCert" type="button">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        <a href="{{ route('trainers.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const nameInput = document.getElementById("name");
        const slugInput = document.getElementById("slug");
    
        function generateSlug() {
            let name = nameInput.value;
    
            let slug = name.toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
    
            slugInput.value = slug;
        }
    
        nameInput.addEventListener("keyup", generateSlug);
        nameInput.addEventListener("change", generateSlug);
    
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const addBtn = document.getElementById('addCert');
    const wrapper = document.getElementById('certWrapper');

    addBtn.addEventListener('click', function () {

        let html = `
        <div class="input-group mb-2 cert-item">
            <input type="text" name="certifications[]" class="form-control" placeholder="Enter certification">
            <div class="input-group-append">
                <button class="btn btn-danger removeCert" type="button">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>`;

        wrapper.insertAdjacentHTML('beforeend', html);
    });

    document.addEventListener('click', function(e){
        if(e.target.closest('.removeCert')){
            e.target.closest('.cert-item').remove();
        }
    });

});
</script>
@endsection
