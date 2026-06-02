@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Courses</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Courses</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
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
            <!---------------- form start  -------------------->
            
            @canany(['create course'])
                <a class="btn btn-primary" href="{{ route('courses.add') }}">Create Course</a>
            @endcan
            @canany(['update course'])
                <a class="btn btn-warning mx-2" href="{{ route('courses.shuffle-show') }}">Shuffle Courses</a>
            @endcan

            <!---------------- table start  -------------------->

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">View Table</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Status</th>
                                    @canany(['delete course', 'update course'])
                                        <th scope="col">{{ __('Action') }}</th>
                                    @endcan

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $index => $course)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $course->coursename }}</td>
                                    <td>{{ $course->duration ?? 0 }} Hrs</td>
                                    <td>Rs. {{ $course->lump_sum_fee ?? 0 }}</td>
                                    <td>
                                        @if($course->is_active == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    @canany(['delete course', 'update course'])
                                    <td>
                                        @canany(['update course'])
                                        <a href="{{ route('courses.status.update', $course->id) }}"
                                            class="btn btn-{{ $course->is_active == '1' ? 'danger' : 'success' }} btn-sm">
                                            @if ($course->is_active == '1')
                                                Deactivate
                                            @else
                                                Activate
                                            @endif
                                        </a>
                                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        @canany(['delete course'])
                                        <a href="{{ route('courses.delete', $course->id) }}" 
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure you want to delete this course?')">
                                           <i class="fas fa-trash-alt"></i>
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

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
