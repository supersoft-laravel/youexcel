@extends('adminpanel.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <form method="POST" action="{{ route('update.gallery.img', $galleryimg->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="d_btn" class="form-label">Select Gallery Category <span class="text-danger">*</span></label>
                                <select class="form-control" name="gallery_cat_id" required>
                                    <option value="" disabled selected>Select a Gallery Category</option>
                                    @foreach ($galleryCat as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $galleryimg['gallery_cat_id'] ? 'selected' : '' }}>{{ $item->cat_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="type" required>
                                    <option value="image" {{ $galleryimg->type == 'image' ? 'selected' : '' }}>Image</option>
                                    <option value="video" {{ $galleryimg->type == 'video' ? 'selected' : '' }}>Video</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="d_btn" class="form-label">Select Course</label>
                                <select class="form-control" name="course_name" required>
                                    <option value="" disabled selected>Select a Course</option>
                                    @foreach ($courses as $course)
                                    <option value="{{ $course->coursename }}" {{ $galleryimg->course_name == $course->coursename ? 'selected' : '' }}>{{ $course->coursename }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $galleryimg->company_name }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="event_name" class="form-label">Event Name</label>
                                <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $galleryimg->event_name }}">
                            </div>
                        </div>
    
                        
                    </div>
    
                    <div class="row">
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                    class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
                    
                </form>
                <!-- Edit Form End  -->
            </div>
        </div>
    </div>
@endsection
