

@extends('adminpanel.app')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Careers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Careers</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    {{-- error message fire --}}
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Careers Table</h1>
                        <form action="{{ route('careers.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                        
                            <table class="table table-striped table-hover" id="careerform">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th scope="col">S.NO</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Cell No</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Position Applying For</th>
                                        <th scope="col">Cover Letter</th>
                                        <th scope="col">LinkedIn</th>
                                        <th scope="col">File</th>
                                        <th scope="col">DateTime</th>
                                        <th scope="col">Form Type</th>
                                        @canany(['delete careers form'])
                                            <th scope="col">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $careerform)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="ids[]" value="{{ $careerform['id'] }}" class="rowCheckbox">
                                        </td>
                                        <td>{{ $careerform['id'] }}</td>
                                        <td>{{ $careerform['Fullname'] }}</td>
                                        <td>{{ $careerform['Cellno'] }}</td>
                                        <td>{{ $careerform['Email'] }}</td>
                                        <td>{{ $careerform['PositionApplyingFor'] }}</td>
                                        <td>{{ $careerform['Coverletter'] }}</td>
                                        <td>
                                            @if($careerform['linkedin'])
                                                <a target="_blank" href="{{ $careerform['linkedin'] }}">Link</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td><a target="_blank" href="{{ url('/files').'/'.$careerform['Image'] }}">View File</a></td>
                                        <td>{{ $careerform['DateTime'] }}</td>
                                        <td>Careers Form</td>
                                        @canany(['delete careers form'])
                                        <td>
                                            <a class="btn btn-danger delete-confirm" href="view-careers/{{ $careerform['id'] }}"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                        @endcan
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @canany(['delete careers form'])
                            <button type="submit" class="btn btn-danger mt-2" id="bulkDeleteBtn">Delete Selected</button>
                            @endcan
                        </form>
                        <!--<table class="table table-striped table-hover" id="careerform">-->
                        <!--    <thead>-->
                        <!--        <tr>-->
                        <!--            <th scope="col">S.NO</th>-->
                        <!--            <th scope="col">Full Name</th>-->
                        <!--            <th scope="col">Cell No</th>-->
                        <!--            <th scope="col">Email</th>-->
                        <!--            <th scope="col">Position Applying For</th>-->
                        <!--            <th scope="col">Cover Letter</th>-->
                        <!--            <th scope="col">File</th>-->
                        <!--            <th scope="col">DateTime</th>-->
                        <!--            <th scope="col">Form Type</th>-->
                        <!--            <th scope="col">Action</th>-->

                        <!--        </tr>-->
                        <!--    </thead>-->
                        <!--    <tbody>-->
                        <!--        @foreach($data as $careerform)-->
                        <!--        <tr>-->
                        <!--          <td>{{$careerform['id']}}</td>-->
                        <!--          <td>{{$careerform['Fullname']}}</td>-->
                        <!--          <td>{{$careerform['Cellno']}}</td>-->
                        <!--          <td>{{$careerform['Email']}}</td>-->
                        <!--          <td>{{$careerform['PositionApplyingFor']}}</td>-->
                        <!--          <td>{{$careerform['Coverletter']}}</td>-->
                        <!--          <td><a target="_blank" href="{{url("/files")."/".$careerform['Image']}}">View File</a></td>-->
                        <!--          <td>{{$careerform['DateTime']}}</td>-->
                        <!--          <td>Careers Form</td>-->
                        <!--          <td>-->
                        <!--              <a class="btn btn-danger delete-confirm" href="view-careers/{{$careerform['id']}}"><i class="fas fa-trash-alt"></i></a>-->
                        <!--            </td>-->
                        <!--        </tr>-->
                        <!--        @endforeach-->
                        <!--    </tbody>-->
                        <!--</table>-->
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
document.addEventListener("DOMContentLoaded", function () {
    const selectAll = document.getElementById("selectAll");
    const checkboxes = document.querySelectorAll(".rowCheckbox");

    // Select/Deselect All
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
});
</script>

</body>

@endsection
