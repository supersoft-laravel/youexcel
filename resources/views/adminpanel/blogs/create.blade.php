@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blogs</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Details</h3>
                </div>

                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <!-- Title -->
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                                placeholder="Enter title" value="{{ old('title') }}" required>
                            @error('title') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="slug">Slug <span class="text-danger">*</span></label>
                            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                                placeholder="Enter slug" value="{{ old('slug') }}" required>
                            @error('slug') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!--<div class="form-group">-->
                        <!--    <label for="blog_category_id">Category <span class="text-danger">*</span></label>-->
                        <!--    <select name="blog_category_id" id="blog_category_id" class="form-control @error('blog_category_id') is-invalid @enderror" required>-->
                        <!--        <option value="" selected disabled>Select Category</option>-->
                        <!--        @foreach($blogCategories as $category)-->
                        <!--            <option value="{{ $category->id }}" {{ old('blog_category_id') == $category->id ? 'selected' : '' }}>-->
                        <!--                {{ $category->name }}-->
                        <!--            </option>-->
                        <!--        @endforeach-->
                        <!--    </select>-->
                        <!--    @error('blog_category_id') -->
                        <!--        <span class="invalid-feedback" role="alert">-->
                        <!--            <strong>{{ $message }}</strong>-->
                        <!--        </span>-->
                        <!--    @enderror-->
                        <!--</div>-->
                        
                        <!--<div class="form-group">-->
                        <!--    <label for="course_id">Course <span class="text-danger">*</span></label>-->
                        <!--    <select name="course_id" id="course_id" class="form-control @error('course_id') is-invalid @enderror" required>-->
                        <!--        <option value="" selected disabled>Select Course</option>-->
                        <!--        @foreach($courses as $course)-->
                        <!--            <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>-->
                        <!--                {{ $course->coursename }}-->
                        <!--            </option>-->
                        <!--        @endforeach-->
                        <!--    </select>-->
                        <!--    @error('course_id') -->
                        <!--        <span class="invalid-feedback" role="alert">-->
                        <!--            <strong>{{ $message }}</strong>-->
                        <!--        </span>-->
                        <!--    @enderror-->
                        <!--</div>-->
                        
                        <div class="form-group">
                            <label for="main_image">Image </label>
                            <input type="file" name="main_image" id="main_image" class="form-control @error('main_image') is-invalid @enderror" accept="image/*" value="{{ old('main_image') }}">
                            @error('main_image') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="content">Content <span class="text-danger">*</span></label>
                            <textarea name="content" rows="5"
                                class="form-control @error('content') is-invalid @enderror"
                                placeholder="Enter content" id="content">{{ old('content') }}</textarea>
                            @error('content') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <h5 class="text-muted">SEO Details</h5>
                        <hr>
                        
                        <div class="form-group">
                            <label for="meta_title">Meta Title </label>
                            <input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                                placeholder="Enter meta title" value="{{ old('meta_title') }}">
                            @error('meta_title') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="meta_description">Meta Description </label>
                            <input type="text" name="meta_description" id="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                placeholder="Enter meta title" value="{{ old('meta_description') }}">
                            @error('meta_description') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords </label>
                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror"
                                placeholder="Enter meta title" value="{{ old('meta_keywords') }}">
                            @error('meta_keywords') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Footer Section -->
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_footer_switch" name="is_footer" value="1" {{ old('is_footer') == '1' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_footer_switch">Enable Footer Section</label>
                            </div>
                        </div>
                        
                        <div id="footer_fields" style="{{ old('is_footer') == '1' ? 'display: block;' : 'display: none;' }}">
                            <h5 class="text-muted">Footer Details</h5>
                            <hr>
                            
                            <div class="form-group">
                                <label for="footer_title">Footer Title</label>
                                <input type="text" name="footer_title" id="footer_title" class="form-control @error('footer_title') is-invalid @enderror"
                                    placeholder="Enter footer title" value="{{ old('footer_title') }}">
                                @error('footer_title') 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="footer_description">Footer Description</label>
                                <textarea name="footer_description" id="footer_description" rows="3" 
                                    class="form-control @error('footer_description') is-invalid @enderror"
                                    placeholder="Enter footer description">{{ old('footer_description') }}</textarea>
                                @error('footer_description') 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="footer_btn_txt">Footer Button Text</label>
                                <input type="text" name="footer_btn_txt" id="footer_btn_txt" class="form-control @error('footer_btn_txt') is-invalid @enderror"
                                    placeholder="Enter button text" value="{{ old('footer_btn_txt') }}">
                                @error('footer_btn_txt') 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="footer_btn_link">Footer Button Link</label>
                                <input type="text" name="footer_btn_link" id="footer_btn_link" class="form-control @error('footer_btn_link') is-invalid @enderror"
                                    placeholder="Enter button link" value="{{ old('footer_btn_link') }}">
                                @error('footer_btn_link') 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
ClassicEditor
    .create(document.querySelector('#content'), {
        mediaEmbed: {
            previewsInData: true
        }
    })
    .catch(error => {
        console.error(error);
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    
        const nameInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
    
        function generateSlug(value) {
            return value.toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
        }
    
        nameInput.addEventListener('keyup', function () {
            slugInput.value = generateSlug(this.value);
        });
    
        nameInput.addEventListener('change', function () {
            slugInput.value = generateSlug(this.value);
        });
        
        // Toggle footer fields
        const footerSwitch = document.getElementById('is_footer_switch');
        const footerFields = document.getElementById('footer_fields');
        
        function toggleFooterFields() {
            if (footerSwitch.checked) {
                footerFields.style.display = 'block';
            } else {
                footerFields.style.display = 'none';
            }
        }
        
        footerSwitch.addEventListener('change', toggleFooterFields);
    
    });
</script>
@endsection
