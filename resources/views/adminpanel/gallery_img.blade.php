@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Gallery Image</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Gallery Image</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!---------------- form start  -------------------->
            @canany(['create gallery'])
            <form method="POST" action="{{ route('store.gallery.img') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="d_btn" class="form-label">Select Gallery Category <span class="text-danger">*</span></label>
                            <select class="form-control" name="gallery_cat_id" required>
                                <option value="" disabled selected>Select a Gallery Category</option>
                                @foreach ($galleryCat as $item)
                                <option value="{{ $item->id }}">{{ $item->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gallery Media <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="image" name="image[]" required multiple>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Type <span class="text-danger">*</span></label>
                            <select class="form-control" name="type" required>
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="d_btn" class="form-label">Select Course</label>
                            <select class="form-control" name="course_name" required>
                                <option value="" disabled selected>Select a Course</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->coursename }}">{{ $course->coursename }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="event_name" class="form-label">Event Name</label>
                            <input type="text" class="form-control" id="event_name" name="event_name">
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
            @endcan
            <!-- form End  -->

            <!---------------- table start  -------------------->

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">View Table</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Gallery Category</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Image</th>
                                    @canany(['delete gallery', 'update gallery'])
                                        <th scope="col">{{ __('Action') }}</th>
                                    @endcan

                                </tr>
                            </thead>
                            <tbody>
                                {{-- dd($data); --}}
                                @foreach($data as $Course)
                                <tr>
                                    <td>{{ $Course->id }}</td>
                                    <td>{{ $Course->category->cat_name ?? 'N/A' }}</td>
                                    <td>{{ $Course->type ?? 'N/A' }}</td>
                                    <td>
                                        @if($Course->type == 'image')
                                            <img src="{{ asset('gallery_images/' . $Course->image) }}" alt="Course Image" style="width: 100px; height: auto;" />
                                        @else
                                            <video style="width: 100px; height: auto;" class="gallery-image" controls>
                                                <source src="{{ asset('gallery_images/' . $Course->image) }}" type="video/mp4">
                                            </video>
                                        @endif
                                    </td>
                                     @canany(['delete gallery', 'update gallery'])
                                    <td>
                                        @canany(['delete gallery'])
                                        <a class="btn btn-danger" href="{{ route('delete_gallery_img', $Course->id) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        @endcan
                                        @canany(['update gallery'])
                                        <a href="{{ route('edit_gallery_img', $Course->id) }}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @endcan
                                    </td>
                                    @endcan
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--------------- table end  --------------->

            <!---------- Edit Form start  ---------------->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
