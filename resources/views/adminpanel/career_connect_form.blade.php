@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        @if($formType == 'student_alumni')
                            Student & Alumni Form Data
                        @elseif($formType == 'career_guidance')
                            Career Guidance Form Data
                        @else
                            Employer / Partnership Form Data
                        @endif
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Career Connect Forms</li>
                        <li class="breadcrumb-item active">
                            @if($formType == 'student_alumni')
                                Student & Alumni
                            @elseif($formType == 'career_guidance')
                                Career Guidance
                            @else
                                Employer / Partnership
                            @endif
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @if(session('success'))
        <div class="alert alert-success justify-content-center" style="width: 50%">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="overflow-x: scroll;">
                    <form action="{{ route('admin.career-connect.bulkDelete', $formType) }}" method="POST" id="bulkDeleteForm">
                        @csrf
                        @method('DELETE')
                        <table class="table table-striped table-hover" id="careerConnectTable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAll"></th>
                                    <th scope="col">S.NO</th>
                                    @if($formType == 'student_alumni' || $formType == 'career_guidance')
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">LinkedIn</th>
                                        <th scope="col">Resume</th>
                                    @endif
                                    @if($formType == 'student_alumni')
                                        <th scope="col"> Jobs Preferred</th>
                                        <th scope="col">GitHub</th>
                                        <th scope="col">Portfolio</th>
                                        <th scope="col">Experience</th>
                                        <th scope="col">Preferred Opportunities</th>
                                        <th scope="col">Association</th>
                                        <th scope="col">Expertise Areas</th>
                                    @elseif($formType == 'career_guidance')
                                        <th scope="col">Area of Guidance</th>
                                        <th scope="col">Experience Level</th>
                                        <th scope="col">Preferred Mode</th>
                                        <th scope="col">Preferred Date/Time</th>
                                        <th scope="col">Message</th>
                                    @elseif($formType == 'employer_partnership')
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Contact Person</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Website</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Job Type</th>
                                        <th scope="col">Skills Required</th>
                                        <th scope="col">Stipend Range</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Job Description</th>
                                        <th scope="col">Application Deadline</th>
                                        <th scope="col">Job Details Upload</th>
                                        <th scope="col">Message</th>
                                    @endif
                                    <th scope="col">Confirmation</th>
                                    <th scope="col">Submitted At</th>
                                    @canany(['delete career connect'])
                                    <th scope="col">Action</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($forms as $form)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="ids[]" value="{{ $form->id }}" class="rowCheckbox">
                                        </td>
                                        <td>{{ $form->id }}</td>
                                        @if($formType == 'student_alumni' || $formType == 'career_guidance')
                                            <td>{{ $form->first_name }}</td>
                                            <td>{{ $form->last_name }}</td>
                                            <td>{{ $form->email }}</td>
                                            <td>{{ $form->phone }}</td>
                                            <td>
                                                @if($form->linkedin_profile)
                                                    <a href="{{ $form->linkedin_profile }}" target="_blank">Link</a>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if($form->resume_path)
                                                    <a href="{{ asset('storage/' . $form->resume_path) }}" target="_blank">View</a>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                        @endif
                                        @if($formType == 'student_alumni')
                                        <td>
                                            @php
                                                $refNos = $form->jobApplications
                                                    ->pluck('careerConnectJob.ref_no')
                                                    ->filter()
                                                    ->toArray();
                                            @endphp
                                        
                                            {{ count($refNos) ? implode(', ', $refNos) : 'N/A' }}
                                        </td>

                                            <td>
                                                @if($form->github_profile)
                                                    <a href="{{ $form->github_profile }}" target="_blank">Link</a>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if($form->portfolio_link)
                                                    <a href="{{ $form->portfolio_link }}" target="_blank">Link</a>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $form->experience ?? 'N/A' }}</td>
                                            <td>{{ $form->preferred_opportunities }}</td>
                                            <td>{{ $form->association_with_youexcel ?? 'N/A' }}</td>
                                            <td>{{ implode(', ', json_decode($form->expertise_areas, true) ?? []) }}</td>
                                        @elseif($formType == 'career_guidance')
                                            <td>{{ $form->area_of_guidance ?? 'N/A' }}</td>
                                            <td>{{ $form->experience_level ?? 'N/A' }}</td>
                                            <td>{{ $form->preferred_mode ?? 'N/A' }}</td>
                                            <td>{{ $form->preferred_datetime ? \Carbon\Carbon::parse($form->preferred_datetime)->format('d F Y H:i') : 'N/A' }}</td>
                                            <td>{{ $form->additional_message ?? 'N/A' }}</td>
                                        @elseif($formType == 'employer_partnership')
                                            <td>{{ $form->company_name }}</td>
                                            <td>{{ $form->contact_person_name }}</td>
                                            <td>{{ $form->email }}</td>
                                            <td>{{ $form->phone }}</td>
                                            <td>
                                                @if($form->website_link)
                                                    <a href="{{ $form->website_link }}" target="_blank">Link</a>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $form->job_title }}</td>
                                            <td>{{ $form->department ?? 'N/A' }}</td>
                                            <td>{{ $form->job_type }}</td>
                                            <td>{{ $form->skills_required ?? 'N/A' }}</td>
                                            <td>{{ $form->stipend_range ?? 'N/A' }}</td>
                                            <td>{{ $form->location ?? 'N/A' }}</td>
                                            <td>{{ $form->job_description ?? 'N/A' }}</td>
                                            <td>{{ $form->application_deadline ? \Carbon\Carbon::parse($form->application_deadline)->format('d F Y') : 'N/A' }}</td>
                                            <td>
                                                @if($form->job_details_upload)
                                                    <a href="{{ asset('storage/' . $form->job_details_upload) }}" target="_blank">View</a>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $form->additional_message ?? 'N/A' }}</td>
                                        @endif
                                        <td>{{ $form->confirmation_agreement == '1' ? 'Yes' : 'No' }}</td>
                                        <td>{{ \Carbon\Carbon::parse($form->created_at)->format('d F Y H:i') }}</td>
                                        @canany(['delete career connect'])
                                        <td>
                                            <a class="btn btn-danger delete-confirm" href="{{ route('admin.career-connect.delete', [$formType, $form->id]) }}"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @canany(['delete career connect'])
                        <button type="submit" class="btn btn-danger mt-2" id="bulkDeleteBtn">Delete Selected</button>
                        @endcan
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="{{asset('admin-panel/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#careerConnectTable').DataTable({
            "pageLength": 10, // Show 10 records per page
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ], // dropdown to select how many entries to show
            "responsive": true,
            dom: 'Bfrtip',
            buttons: [
                'copy',
                {
                    extend: 'csvHtml5',
                    title: 'Career Connect Form Data'
                },
                {
                    extend: 'excelHtml5',
                    title: 'Career Connect Form Data'
                },
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'TABLOID', // TABLOID OR LEGAL
                    footer: true,
                    title: 'Career Connect Form Data'
                },
                'print'
            ]
        });
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Initialize DataTables
    // $('#careerConnectTable').DataTable({
    //     "paging": true,
    //     "lengthChange": true,
    //     "searching": true,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": false,
    //     "responsive": true,
    // });

    // Select/Deselect All
    const selectAll = document.getElementById("selectAll");
    const checkboxes = document.querySelectorAll(".rowCheckbox");

    selectAll.addEventListener("change", function () {
        checkboxes.forEach(checkbox => {
            checkbox.checked = selectAll.checked;
        });
    });

    // Uncheck "Select All" if any checkbox is unchecked
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            if (!this.checked) {
                selectAll.checked = false;
            } else if (document.querySelectorAll(".rowCheckbox:checked").length === checkboxes.length) {
                selectAll.checked = true;
            }
        });
    });

    // Confirm deletion for single delete
    // document.querySelectorAll('.delete-confirm').forEach(button => {
    //     button.addEventListener('click', function (e) {
    //         e.preventDefault();
    //         if (confirm('Are you sure you want to delete this record?')) {
    //             window.location.href = this.href;
    //         }
    //     });
    // });

    // Confirm bulk deletion
    document.getElementById('bulkDeleteForm').addEventListener('submit', function (e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete the selected records?')) {
            this.submit();
        }
    });
});
</script>
@endsection