@extends('adminpanel.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <form method="POST" action="{{ route('update.program', $program->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Program Name</label>
                                <input type="text" class="form-control" id="program_name" name="program_name"
                                    value="{{ $program->program_name }}">
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
