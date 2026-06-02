@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Gallery Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Gallery Category</li>
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
            <form method="POST" action="{{ route('store.gallery.cat') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Name <span class="text-danger">*</span></label></label>
                            <input type="text" class="form-control" id="cat_name" name="cat_name" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="parent_category_id" class="form-label">Parent Category</label>
                            <select class="form-control form-select" id="parent_category_id" name="parent_category_id" >
                                <option value="" disabled selected>Select Parent Category</option>
                                @if(isset($parentCategories) && count($parentCategories) > 0)
                                    @foreach($parentCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <!--<div class="col-lg-4">-->
                    <!--    <div class="mb-3">-->
                    <!--        <label for="cat_type" class="form-label">Category Type</label>-->
                    <!--        <select class="form-control form-select" id="cat_type" name="cat_type" required>-->
                    <!--            <option value="" disabled selected>Select Category Type</option>-->
                    <!--            <option value="corporate-training-solutions">Corporate Training Solutions</option>-->
                    <!--            <option value="open-enrollments">Open Enrollments</option>-->
                    <!--            <option value="government-sponsored-programs">Government Sponsored Programs</option>-->
                    <!--            <option value="others">Others</option>-->
                    <!--        </select>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-2">-->
                    <!--    <div class="mb-3">-->
                    <!--        <label for="exampleInputEmail1" class="form-label">Year</label>-->
                    <!--        <input type="number" class="form-control" id="year" name="year" required>-->
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
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Parent Category</th>
                                    @canany(['delete gallery', 'update gallery'])
                                        <th scope="col">{{ __('Action') }}</th>
                                    @endcan

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $Course)
                                <tr>
                                  <td>{{ $Course['id'] }}</td>
                                  <td>{{ $Course['cat_name'] }}</td>
                                  <td>{{ $Course->parentCategory ? $Course->parentCategory->cat_name : 'N/A' }}</td>
                                  @canany(['delete gallery', 'update gallery'])
                                  <td>
                                      @canany(['delete gallery'])
                                      <a class="btn btn-danger" href="{{ route('delete_gallery_cat', $Course->id)}}"><i class="fas fa-trash-alt"></i></a>
                                      @endcan
                                      @canany(['update gallery'])
                                      <a href="{{ route('edit_gallery_cat', $Course->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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
