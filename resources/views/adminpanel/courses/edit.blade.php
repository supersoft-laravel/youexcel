@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <h3 class="card-title">Course Details</h3>
                </div>

                <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body row">

                        <div class="form-group col-md-6">
                            <label for="coursename">Course Name</label>
                            <input type="text" name="coursename" id="coursename" class="form-control @error('coursename') is-invalid @enderror"
                                placeholder="Enter course name" value="{{ old('coursename', $course->coursename) }}" required>
                            @error('coursename') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                                placeholder="Enter slug" value="{{ old('slug', $course->slug) }}" required>
                            @error('slug') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="tagline">Tagline</label><span class="text-danger">*</span>
                            <input type="text" name="tagline" id="tagline" class="form-control @error('tagline') is-invalid @enderror"
                                placeholder="Enter tagline" value="{{ old('tagline', $course->tagline) }}" required>
                            @error('tagline') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="trainer_id">Trainer</label><span class="text-danger">*</span>
                            <select name="trainer_id" id="trainer_id" class="form-control @error('trainer_id') is-invalid @enderror" required>
                                <option value="" selected disabled>Select Trainer</option>
                                @foreach($trainers as $trainer)
                                    <option value="{{ $trainer->id }}" {{ old('trainer_id', $course->trainer_id) == $trainer->id ? 'selected' : '' }}>
                                        {{ $trainer->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('trainer_id') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="difficulty">Difficulty Level</label>
                            <input type="text" name="difficulty" class="form-control @error('difficulty') is-invalid @enderror"
                                placeholder="Enter difficulty" value="{{ old('difficulty', $course->difficulty) }}" required>
                            @error('difficulty') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="rating">Rating <small>(rate from 1 to 5)</small></label>
                            <input type="number" name="rating" min="0" step="0.1" max="5" class="form-control @error('rating') is-invalid @enderror"
                                placeholder="Enter rating" value="{{ old('rating', $course->rating) }}" required>
                            @error('rating') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="duration">Duration <small>(write in hours)</small></label>
                            <input type="number" name="duration" min="0" class="form-control @error('duration') is-invalid @enderror"
                                placeholder="Enter duration" value="{{ old('duration', $course->duration) }}" required>
                            @error('duration') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="sessions">Sessions </label>
                            <input type="number" name="sessions" min="0" class="form-control @error('sessions') is-invalid @enderror"
                                placeholder="Enter sessions" value="{{ old('sessions', $course->sessions) }}">
                            @error('sessions') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Brouchure -->
                        <div class="form-group col-md-6">
                            <label for="brouchure">Brouchure PDF</label>
                            <input type="file" name="brouchure" class="form-control-file @error('brouchure') is-invalid @enderror">
                            @error('brouchure') 
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($course->image)
                                <a class="btn btn-link" href="{{ asset($course->image) }}" target="_blank">View</a>
                            @endif
                        </div>

                        <!-- Brouchure -->
                        <div class="form-group col-md-6">
                            <label for="outline_pdf">Outline PDF</label>
                            <input type="file" name="outline_pdf" class="form-control-file @error('outline_pdf') is-invalid @enderror">
                            @error('outline_pdf') 
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($course->outline_pdf)
                                <a class="btn btn-link" href="{{ asset($course->outline_pdf) }}" target="_blank">View</a>
                            @endif
                        </div>
                        
                        <!-- Image -->
                        <div class="form-group col-md-6">
                            <label for="image_url">Image <small>(350 x 200)</small></label>
                            <input type="file" name="image_url" accept="image/*"
                                class="form-control-file @error('image_url') is-invalid @enderror">
                            @error('image_url') 
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($course->image_url)
                                <a class="btn btn-link" href="{{ asset($course->image_url) }}" target="_blank">View</a>
                            @endif
                        </div>
                        
                        <!-- Video -->
                        <div class="form-group col-md-6">
                            <label for="video_url">Video <small>(1300 x 500)</small></label>
                            <input type="file" name="video_url" accept="video/*"
                                class="form-control-file @error('video_url') is-invalid @enderror">
                            @error('video_url') 
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($course->video_url)
                                <a class="btn btn-link" href="{{ asset($course->video_url) }}" target="_blank">View</a>
                            @endif
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="lump_sum_fee">Lump Sum Fee</label>
                            <input type="text" name="lump_sum_fee" class="form-control @error('lump_sum_fee') is-invalid @enderror"
                                placeholder="Enter fee" value="{{ old('lump_sum_fee', $course->lump_sum_fee) }}" required>
                            @error('lump_sum_fee') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="zoho_id">Zoho Id</label>
                            <input type="text" name="zoho_id" class="form-control @error('zoho_id') is-invalid @enderror"
                                placeholder="Enter zoho id" value="{{ old('zoho_id', $course->zoho_id) }}">
                            @error('zoho_id') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="overview">Course Overview</label><span class="text-danger">*</span>
                            <textarea name="overview" rows="5"
                                class="form-control @error('overview') is-invalid @enderror"
                                placeholder="Enter overview">{{ old('overview', $course->overview) }}</textarea>
                            @error('overview') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="prerequisites">Prerequisities</label><span class="text-danger">*</span>
                            <input type="text" name="prerequisites" id="prerequisites" class="form-control @error('prerequisites') is-invalid @enderror"
                                placeholder="Enter prerequisites" value="{{ old('prerequisites', $course->prerequisites) }}" required>
                            @error('prerequisites') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="recommendation">Recommendations</label><span class="text-danger">*</span>
                            <input type="text" name="recommendation" id="recommendation" class="form-control @error('recommendation') is-invalid @enderror"
                                placeholder="Enter recommendation" value="{{ old('recommendation', $course->recommendation) }}" required>
                            @error('recommendation') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label>
                                Learning Outcomes
                                <button type="button" class="btn btn-sm btn-success ml-2" id="addOutcome">
                                    <i class="fas fa-plus"></i> Add New
                                </button>
                            </label>
                        
                            <div id="outcomesWrapper">
                        
                                @php
                                    $outcomes = json_decode($course->outcomes, true);
                                @endphp
                        
                                @if(!empty($outcomes))
                                    @foreach($outcomes as $outcome)
                                        <div class="input-group mb-2 outcome-item">
                                            <input type="text" name="outcomes[]" class="form-control" value="{{ $outcome }}" placeholder="Enter learning outcome">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger removeOutcome" type="button">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="input-group mb-2 outcome-item">
                                        <input type="text" name="outcomes[]" class="form-control" placeholder="Enter learning outcome">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger removeOutcome" type="button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                        
                            </div>
                        </div>
                        
                        <h5 class="text-muted">SEO Details</h5>
                        <hr>
                        
                        <div class="form-group col-md-12">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                                placeholder="Enter meta title" value="{{ old('meta_title', $course->meta_title) }}">
                            @error('meta_title') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="meta_description">Meta Description</label>
                            <input type="text" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                placeholder="Enter meta description" value="{{ old('meta_description', $course->meta_description) }}">
                            @error('meta_description') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror"
                                placeholder="Enter meta keywords" value="{{ old('meta_keywords', $course->meta_keywords) }}">
                            @error('meta_keywords') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('overview');
</script>
// <script>
//     document.addEventListener("DOMContentLoaded", function () {

//         const nameInput = document.getElementById("coursename");
//         const slugInput = document.getElementById("slug");
    
//         function generateSlug() {
//             let name = nameInput.value;
    
//             let slug = name.toLowerCase()
//                 .trim()
//                 .replace(/[^a-z0-9\s-]/g, '')
//                 .replace(/\s+/g, '-')
//                 .replace(/-+/g, '-');
    
//             slugInput.value = slug;
//         }
    
//         nameInput.addEventListener("keyup", generateSlug);
//         nameInput.addEventListener("change", generateSlug);
    
//     });
// </script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const addBtn = document.getElementById('addOutcome');
    const wrapper = document.getElementById('outcomesWrapper');

    addBtn.addEventListener('click', function () {

        let html = `
        <div class="input-group mb-2 outcome-item">
            <input type="text" name="outcomes[]" class="form-control" placeholder="Enter learning outcome">
            <div class="input-group-append">
                <button class="btn btn-danger removeOutcome" type="button">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>`;

        wrapper.insertAdjacentHTML('beforeend', html);
    });

    document.addEventListener('click', function(e){
        if(e.target.closest('.removeOutcome')){
            e.target.closest('.outcome-item').remove();
        }
    });

});
</script>
@endsection

