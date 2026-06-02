@extends('adminpanel.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <form method="POST" action="{{ route('update.gallery.cat', $gallerycat->id) }}" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="cat_name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cat_name" name="cat_name"
                                    value="{{ $gallerycat['cat_name'] }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="parent_category_id" class="form-label">Parent Category</label>
                                <select class="form-control form-select" id="parent_category_id" name="parent_category_id">
                                    <option value="" disabled selected>Select Parent Category</option>
                                    @if(isset($parentCategories) && count($parentCategories) > 0)
                                        @foreach($parentCategories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $gallerycat['parent_category_id'] ? 'selected' : '' }}>{{ $category->cat_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-lg-4">-->
                        <!--    <div class="mb-3">-->
                        <!--        <label for="cat_type" class="form-label">Category Type</label>-->
                        <!--        <select class="form-control form-select" id="cat_type" name="cat_type" required>-->
                        <!--            <option value="corporate-training-solutions" {{ $gallerycat['cat_type'] == 'corporate-training-solutions' ? 'selected' : '' }}>-->
                        <!--                Corporate Training Solutions-->
                        <!--            </option>-->
                        <!--            <option value="open-enrollments" {{ $gallerycat['cat_type'] == 'open-enrollments' ? 'selected' : '' }}>-->
                        <!--                Public Courses-->
                        <!--            </option>-->
                        <!--            <option value="government-sponsored-programs" {{ $gallerycat['cat_type'] == 'government-sponsored-programs' ? 'selected' : '' }}>-->
                        <!--                Government Sponsored Programs-->
                        <!--            </option>-->
                        <!--            <option value="others" {{ $gallerycat['cat_type'] == 'others' ? 'selected' : '' }}>-->
                        <!--                Others-->
                        <!--            </option>-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-lg-2">-->
                        <!--    <div class="mb-3">-->
                        <!--        <label for="exampleInputEmail1" class="form-label">Year</label>-->
                        <!--        <input type="number" class="form-control" value="{{ $gallerycat['year'] }}" id="year"-->
                        <!--            name="year">-->
                        <!--    </div>-->
                        <!--</div>-->
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
