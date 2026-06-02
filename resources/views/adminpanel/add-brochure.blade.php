@extends('./adminpanel.app')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Courses By brochures  </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Brochures PDF Only</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  @if(Session::has('red'))
        
            
            <div id="toastsContainerTopRight" class="toasts-top-right fixed" bis_skin_checked="1">
                <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true" bis_skin_checked="1">
                    <div class="toast-header" bis_skin_checked="1"><strong class="mr-auto">Error </strong>
                    <small>PFD File</small><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        </div>
            <div class="toast-body" bis_skin_checked="1">  {{ Session::get('red') }}</div>
            </div></div>
            
            @endif
               @if(Session::has('del'))
                 <div id="toastsContainerTopRight" class="toasts-top-right fixed" bis_skin_checked="1">
                <div class="toast bg-warning fade show" role="alert" aria-live="assertive" aria-atomic="true" bis_skin_checked="1">
                    <div class="toast-header" bis_skin_checked="1"><strong class="mr-auto">Success </strong>
                    <small>PFD File</small><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        </div>
            <div class="toast-body" bis_skin_checked="1">  {{ Session::get('del') }}</div>
            </div></div>
           
            @endif
              @if(Session::has('success'))
                 <div id="toastsContainerTopRight" class="toasts-top-right fixed" bis_skin_checked="1">
                <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true" bis_skin_checked="1">
                    <div class="toast-header" bis_skin_checked="1"><strong class="mr-auto">Success </strong>
                    <small>PFD File</small><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        </div>
            <div class="toast-body" bis_skin_checked="1">  {{ Session::get('success') }}</div>
            </div></div>
           
            @endif
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                   <form action="{{route('brochures.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
                       <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course Name</label>
                            
                             <select class="form-control" name="title" id="coursename"
                                                            aria-label="Default select example" data-live-search="true"
                                                            required>
                                                        <!-- <option value="Choose from dropdown list" selected>Choose from dropdown list</option> -->
                                                        @foreach($course as $cour)
                                                            <option value="{{$cour->id}}">{{$cour->coursename}}</option>
                                                        @endforeach
                                                        <option value="Other">Other</option>
                                                    </select>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" name="image"  class="form-control" required>
                        </div>
                    </div>
                     <div class="col-lg-2">
                          <div class="mt-4">
                          <label for="exampleInputEmail1" class="form-label">&nbsp;</label>
                           <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                class="fas fa-long-arrow-alt-right"></i></button>
                                </div>
                    </div>
                </div>
                       </form>
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Brochures PDF Only</h1>
                        <table class="table table-striped table-hover" id="careerform">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($course as $resource)
                                <tr>
                                  <td>{{ $resource->coursename }}</td>
                                  <td>
                                      @if($resource->image == "" )
                                      
                                      @else
                                    <a href="{{asset($resource->image) }}" download>
                                          <i class="fas fa-file-pdf" aria-hidden="true"></i>
                                          </a>
                                                @endif
                                     </td>
                                 <td>
                                      <a class="btn btn-danger" href="{{route('brochures.del',$resource->id)}}"><i class="fas fa-trash-alt"></i></a>
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