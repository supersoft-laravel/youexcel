@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.career-connect-jobs') }}">Career Connect Jobs</a></li>
                        <li class="breadcrumb-item active">Edit Job</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- success message --}}
    @if(session('success'))
        <div class="alert alert-success text-center w-50 mx-auto">
            {{ session('success') }}
        </div>
    @endif

    {{-- error messages --}}
    @if($errors->any())
        <div class="alert alert-danger w-50 mx-auto">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0 text-center">Edit Career Connect Job</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.career-connect-job.update', $job->id) }}" method="POST">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Ref. No <span class="text-danger">*</span></label>
                                        <input type="text" name="ref_no" class="form-control" value="{{ old('ref_no', $job->ref_no) }}" disabled>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fw-bold">Job Title</label>
                                        <input type="text" name="job_title" class="form-control" value="{{ old('job_title', $job->job_title) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fw-bold">Company Name</label>
                                        <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $job->company_name) }}">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="minimum_experience" class="fw-bold">Minimum Experience <span style="color:red">*</span></label>
                                        <select name="minimum_experience" class="form-control" required>
                                            <option value="" disabled>Select Experience</option>
                                            <option value="0 - 1 Years" {{ old('minimum_experience', $job->minimum_experience) == '0 - 1 Years' ? 'selected' : '' }}>0 - 1 Years</option>
                                            <option value="1 - 3 Years" {{ old('minimum_experience', $job->minimum_experience) == '1 - 3 Years' ? 'selected' : '' }}>1 - 3 Years</option>
                                            <option value="3 - 5 Years" {{ old('minimum_experience', $job->minimum_experience) == '3 - 5 Years' ? 'selected' : '' }}>3 - 5 Years</option>
                                            <option value="5 - 10 Years" {{ old('minimum_experience', $job->minimum_experience) == '5 - 10 Years' ? 'selected' : '' }}>5 - 10 Years</option>
                                            <option value="10+ Years" {{ old('minimum_experience', $job->minimum_experience) == '10+ Years' ? 'selected' : '' }}>10+ Years</option>
                                        </select>
                                    </div>
                                    <!--<div class="col-md-6">-->
                                    <!--    <label class="fw-bold">Minimum Experience</label>-->
                                    <!--    <input type="text" name="minimum_experience" class="form-control" value="{{ old('minimum_experience', $job->minimum_experience) }}">-->
                                    <!--</div>-->

                                    <div class="col-md-12">
                                        <label class="fw-bold">Expertise (Comma-separated)</label>
                                        @php
                                            $expertise = is_array(json_decode($job->expertise, true))
                                                ? implode(', ', json_decode($job->expertise, true))
                                                : $job->expertise;
                                        @endphp
                                        <input type="text" name="expertise" class="form-control" placeholder="e.g. Laravel, Vue.js, APIs"
                                               value="{{ old('expertise', $expertise) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fw-bold">Deadline</label>
                                        <input type="date" name="deadline" class="form-control" 
                                               value="{{ old('deadline', $job->deadline) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fw-bold">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="pending" {{ $job->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="approved" {{ $job->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="disapproved" {{ $job->status == 'disapproved' ? 'selected' : '' }}>Disapproved</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary px-5">
                                        <i class="fas fa-save me-2"></i>Update Job
                                    </button>
                                    <a href="{{ route('admin.career-connect-jobs') }}" class="btn btn-secondary px-4">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('admin-panel/plugins/jquery/jquery.min.js') }}"></script>
@endsection
