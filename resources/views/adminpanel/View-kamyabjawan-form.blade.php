@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Kamyab Jawan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Kamyab Jawan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Kamyab Jawan Table</h1>
                        <table class="table table-striped table-hover" id="Kamyabjawanform">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Cnic</th>
                                    <th scope="col">Father Name</th>
                                    <th scope="col">Father Monthly Income</th>
                                    <th scope="col">Father Occupation</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col">Domicile</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">District</th>
                                    <th scope="col">E-mail </th>
                                    <th scope="col">Present Address</th>
                                    <th scope="col">Matric_year</th>
                                    <th scope="col">Matric_grade</th>
                                    <th scope="col">Matric_school</th>
                                    <th scope="col">Intermediate_year</th>
                                    <th scope="col">Intermediate_grade</th>
                                    <th scope="col">Intermediate_school</th>
                                    <th scope="col">BSC_year</th>
                                    <th scope="col">BSC_grade</th>
                                    <th scope="col">BSC_school</th>
                                    <th scope="col">Other_year</th>
                                    <th scope="col">Other_grade</th>
                                    <th scope="col">Other_school</th>
                                    <th scope="col">Rank1</th>
                                    <th scope="col">Exp_Name_of_Institution1</th>
                                    <th scope="col">Duration1</th>
                                    <th scope="col">Rank2</th>
                                    <th scope="col">Exp_Name_of_Institution2</th>
                                    <th scope="col">Duration2</th>
                                    <th scope="col">Rank3</th>
                                    <th scope="col">Exp_Name_of_Institution3</th>
                                    <th scope="col">Duration3</th>
                                    <th scope="col">Preferences1</th>
                                    <th scope="col">Course_Name_of_Institution1</th>
                                    <th scope="col">Trade_Name1</th>
                                    <th scope="col">District1</th>
                                    <th scope="col">Preferences2</th>
                                    <th scope="col">Course_Name_of_Institution2</th>
                                    <th scope="col">Trade_Name2</th>
                                    <th scope="col">District2</th>
                                    <th scope="col">Preferences3</th>
                                    <th scope="col">Course_Name_of_Institution3</th>
                                    <th scope="col">Trade_Name3</th>
                                    <th scope="col">District3</th>
                                    <th scope="col">Sports_person</th>
                                    <th scope="col">Hafiz_quran</th>
                                    <th scope="col">Physical_disability</th>
                                    <th scope="col">Other_data</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Form Type</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $Register)
                                <tr>
                                  <td>{{$Register['id']}}</td>
                                  <td>{{$Register['Name']}}</td>
                                  <td>{{$Register['Gender']}}</td>
                                  <td>{{$Register['Cnic']}}</td>
                                  <td>{{$Register['Fathername']}}</td>
                                  <td>{{$Register['Father_income_montly']}}</td>
                                  <td>{{$Register['Father_occupation']}}</td>
                                  <td>{{$Register['Mobile_no']}}</td>
                                  <td>{{$Register['Domicile']}}</td>
                                  <td>{{$Register['Dob']}}</td>
                                  <td>{{$Register['Religion']}}</td>
                                  <td>{{$Register['District']}}</td>
                                  <td>{{$Register['Email']}}</td>
                                  <td>{{$Register['Present_address']}}</td>
                                  <td>{{$Register['Matric_year']}}</td>
                                  <td>{{$Register['Matric_grade']}}</td>
                                  <td>{{$Register['Matric_school']}}</td>
                                  <td>{{$Register['Intermediate_year']}}</td>
                                  <td>{{$Register['Intermediate_grade']}}</td>
                                  <td>{{$Register['Intermediate_school']}}</td>
                                  <td>{{$Register['BSC_year']}}</td>
                                  <td>{{$Register['BSC_grade']}}</td>
                                  <td>{{$Register['BSC_school']}}</td>
                                  <td>{{$Register['Other_year']}}</td>
                                  <td>{{$Register['Other_grade']}}</td>
                                  <td>{{$Register['Other_school']}}</td>
                                  <td>{{$Register['Rank1']}}</td>
                                  <td>{{$Register['Exp_Name_of_Institution1']}}</td>
                                  <td>{{$Register['Duration1']}}</td>
                                  <td>{{$Register['Rank2']}}</td>
                                  <td>{{$Register['Exp_Name_of_Institution2']}}</td>
                                  <td>{{$Register['Duration2']}}</td>
                                  <td>{{$Register['Rank3']}}</td>
                                  <td>{{$Register['Exp_Name_of_Institution3']}}</td>
                                  <td>{{$Register['Duration3']}}</td>
                                  <td>{{$Register['Preferences1']}}</td>
                                  <td>{{$Register['Course_Name_of_Institution1']}}</td>
                                  <td>{{$Register['Trade_Name1']}}</td>
                                  <td>{{$Register['District1']}}</td>
                                  <td>{{$Register['Preferences2']}}</td>
                                  <td>{{$Register['Course_Name_of_Institution2']}}</td>
                                  <td>{{$Register['Trade_Name2']}}</td>
                                  <td>{{$Register['District2']}}</td>
                                  <td>{{$Register['Preferences3']}}</td>
                                  <td>{{$Register['Course_Name_of_Institution3']}}</td>
                                  <td>{{$Register['Trade_Name3']}}</td>
                                  <td>{{$Register['District3']}}</td>
                                  <td>{{$Register['Sports_person']}}</td>
                                  <td>{{$Register['Hafiz_quran']}}</td>
                                  <td>{{$Register['Physical_disability']}}</td>
                                  <td>{{$Register['Other_data']}}</td>
                                  <td>{{$Register['Image']}}</td>

                                  <td>Kamyab-jawan Form</td>
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="View-kamyabjawan-form/{{$Register['id']}}"><i class="fas fa-trash-alt"></i></a>
                                      <!-- <a href="{{url('edit').'/'.$Register['id']}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="fas fa-edit"></i></a> -->
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



@endsection    