<!--<h1>Resources</h1>-->

<!--<a href="{{ route('resources.create') }}">Create New Resource</a>-->

<!--@foreach ($resources as $resource)-->
<!--    <div>-->
<!--        <h2>{{ $resource->title }}</h2>-->
<!--        <img src="{{ asset('storage/' . $resource->image_path) }}" alt="Resource Image" width="100">-->
<!--        <p>Status: {{ $resource->status == 1 ? 'Active' : 'Inactive' }}</p>-->
<!--        <a href="{{ route('resources.edit', $resource) }}">Edit</a>-->
<!--        <form action="{{ route('resources.destroy', $resource) }}" method="POST">-->
<!--            @csrf-->
<!--            @method('DELETE')-->
<!--            <button type="submit">Delete</button>-->
<!--        </form>-->
<!--    </div>-->
<!--@endforeach-->


@extends('./adminpanel.app')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Popups</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Popups</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                   <form action="{{route('resources.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
                       <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="coursename" name="title">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" name="image" required>
                        </div>
                    </div>
                     <div class="col-lg-2">
                           <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>
                       </form>
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Popups Table</h1>
                        <table class="table table-striped table-hover" id="careerform">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($resources as $resource)
                                <tr>
                                  <td>{{ $resource->title }}</td>
                                  <td> <img src="{{ asset('' . $resource->image_path) }}" alt="Resource Image" width="20"></td>
                                  <td>
                                   <input type="checkbox"class="status-toggle"  data-resource-id="{{ $resource->id }}"   {{ $resource->status == 1 ? 'checked' : '' }}
        >
                                  </td>
                                
                                
                                 <td>
                                      <a class="btn btn-danger" href="{{route('delete-resources',$resource->id)}}"><i class="fas fa-trash-alt"></i></a>
                                      </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--------------- table end  --------------->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<body>
<script>
    // $(document).ready(function() {
    //     $('a[href="view-careers"]').addClass("active");
    // });
    
    
        document.addEventListener('DOMContentLoaded', function () {
        var toggleSwitches = document.querySelectorAll('.status-toggle');

        toggleSwitches.forEach(function (switchElement) {
            switchElement.addEventListener('change', function () {
                var resourceId = switchElement.getAttribute('data-resource-id');
                toggleStatus(resourceId);
            });
        });

        function toggleStatus(resourceId) {
            fetch(`/resources/${resourceId}/toggle-status`, {
                method: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response if needed
            })
            .catch(error => console.error('Error toggling status:', error));
        }
    });
    </script>
</body>

@endsection