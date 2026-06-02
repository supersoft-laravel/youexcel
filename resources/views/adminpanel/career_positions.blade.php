@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Career Position</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Career Position</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Alert Messages -->
                <div class="container mt-3">
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
                
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            <!-- End Alert Messages -->
            <!---------------- form start  -------------------->
            @canany(['create career position'])
            <form method="POST" action="{{ route('career-positions.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Position Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="eligibility" class="form-label">Eigibility</label>
                            <input type="text" class="form-control" id="eligibility" name="eligibility" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                    class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
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
                                    <th scope="col">Position Name</th>
                                    <th scope="col">Eigibility</th>
                                    <th scope="col">Status</th>
                                    @canany(['delete career position', 'update career position'])
                                        <th scope="col">{{ __('Action') }}</th>
                                    @endcan

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($positions as $index => $position)
                                <tr>
                                  <td>{{ $index + 1 }}</td>
                                  <td>{{ $position['name'] }}</td>
                                  <td>{{ $position['eligibility'] ?? 'N/A' }}</td>
                                  <td>
                                      @if($position->status == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                  </td>
                                  @canany(['delete career position', 'update career position'])
                                  <td class="d-flex justify-content-start">
                                      @canany(['delete career position'])
                                      <form style="margin-right: 5px;" action="{{ route('career-positions.destroy', $position->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        @endcan
                                        @canany(['update career position'])
                                        @if($position->status == '1')
                                            <a style="margin-right: 5px;" href="{{ route('career-positions.toggle', $position->id) }}" class="btn btn-warning btn-sm me-2">Deactivate</a>
                                        @else
                                            <a style="margin-right: 5px;" href="{{ route('career-positions.toggle', $position->id) }}" class="btn btn-success btn-sm me-2">Activate</a>
                                        @endif
                                      <a href="#" 
                                           class="btn btn-primary me-2 editBtn"
                                           data-id="{{ $position->id }}"
                                           data-name="{{ $position->name }}">
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

            <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="editForm" method="POST" action="">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Career Position</h5>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="editName" class="form-label">Position Name</label>
                <input type="text" class="form-control" id="editName" name="name" required>
            </div>
            <div class="mb-3">
                <label for="editEligibility" class="form-label">Eligibility</label>
                <input type="text" class="form-control" id="editEligibility" name="eligibility" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.editBtn');
    const editModal = new bootstrap.Modal(document.getElementById('editModal'));
    const editName = document.getElementById('editName');
    const editForm = document.getElementById('editForm');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            let id = this.getAttribute('data-id');
            let name = this.getAttribute('data-name');

            // Fill modal fields
            editName.value = name;

            // Set form action dynamically
            editForm.action = `/career-positions/${id}`;

            // Show modal
            editModal.show();
        });
    });
});
</script>




@endsection
