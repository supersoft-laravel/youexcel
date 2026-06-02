@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Trainers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Trainers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

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
            
            @canany(['create trainer'])
                <a class="btn btn-primary" href="{{ route('trainers.add') }}">Add Trainer</a>
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Exp.</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Status</th>
                                    @canany(['delete trainer', 'update trainer'])
                                        <th scope="col">{{ __('Action') }}</th>
                                    @endcan

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trainers as $index => $trainer)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $trainer->name }}</td>
                                    <td>{{ $trainer->experience }} Years</td>
                                    <td>{{ $trainer->phone ?? 'N/A' }}</td>
                                    <td>
                                        @if($trainer->is_active == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    @canany(['delete trainer', 'update trainer'])
                                    <td>
                                        @canany(['update trainer'])
                                      <a href="{{ route('trainers.status.update', $trainer->id) }}"
                                            class="btn btn-{{ $trainer->is_active == '1' ? 'danger' : 'success' }} btn-sm">
                                            @if ($trainer->is_active == '1')
                                                Deactivate
                                            @else
                                                Activate
                                            @endif
                                        </a>
                                      <a href="{{ route('trainers.edit', $trainer->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    @endcan
                                    @canany(['delete trainer'])
                                      <a href="{{ route('trainers.delete', $trainer->id) }}" 
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure you want to delete this trainer?')">
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
