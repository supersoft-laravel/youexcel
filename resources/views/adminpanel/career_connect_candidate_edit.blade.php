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
                        <li class="breadcrumb-item"><a href="{{ route('admin.career-connect-candidates') }}">Career Connect Candidate</a></li>
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
                            <h4 class="mb-0 text-center">Edit Career Connect Candidate</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.career-connect-candidate.update', $candidate->id) }}" method="POST">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Ref. No <span class="text-danger">*</span></label>
                                        <input type="text" name="ref_no" class="form-control" value="{{ old('ref_no', $candidate->ref_no) }}" disabled>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fw-bold">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name', $candidate->name) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fw-bold">Phone</label>
                                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $candidate->phone) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fw-bold">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email', $candidate->email) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fw-bold">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="Male" {{ $candidate->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $candidate->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Others" {{ $candidate->gender == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="experience" class="fw-bold">Experience <span style="color:red">*</span></label>
                                        <select name="experience" class="form-control" required>
                                            <option value="" disabled>Select Experience</option>
                                            <option value="0 - 1 Years" {{ old('experience', $candidate->experience) == '0 - 1 Years' ? 'selected' : '' }}>0 - 1 Years</option>
                                            <option value="1 - 3 Years" {{ old('experience', $candidate->experience) == '1 - 3 Years' ? 'selected' : '' }}>1 - 3 Years</option>
                                            <option value="3 - 5 Years" {{ old('experience', $candidate->experience) == '3 - 5 Years' ? 'selected' : '' }}>3 - 5 Years</option>
                                            <option value="5 - 10 Years" {{ old('experience', $candidate->experience) == '5 - 10 Years' ? 'selected' : '' }}>5 - 10 Years</option>
                                            <option value="10+ Years" {{ old('experience', $candidate->experience) == '10+ Years' ? 'selected' : '' }}>10+ Years</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="fw-bold">Expertise (Comma-separated)</label>
                                        @php
                                            $expertise = is_array(json_decode($candidate->expertise, true))
                                                ? implode(', ', json_decode($candidate->expertise, true))
                                                : $candidate->expertise;
                                        @endphp
                                        <input type="text" name="expertise" class="form-control" placeholder="e.g. Laravel, Vue.js, APIs"
                                               value="{{ old('expertise', $expertise) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fw-bold">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="pending" {{ $candidate->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="approved" {{ $candidate->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="disapproved" {{ $candidate->status == 'disapproved' ? 'selected' : '' }}>Disapproved</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary px-5">
                                        <i class="fas fa-save me-2"></i>Update Candidate
                                    </button>
                                    <a href="{{ route('admin.career-connect-candidates') }}" class="btn btn-secondary px-4">Cancel</a>
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
