<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YouExcel | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin-panel/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin-panel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin-panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin-panel/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-panel/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin-panel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin-panel/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin-panel/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <!-- data table csv export start  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
  <!-- data table csv export End  -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('adminpanel.loader')
@include('adminpanel.navbar')
@include('adminpanel.sidebar')
@yield('content')
@include('adminpanel.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin-panel/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin-panel/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin-panel/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin-panel/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin-panel/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin-panel/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin-panel/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin-panel/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin-panel/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin-panel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin-panel/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin-panel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-panel/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
 <!--<script src="{{asset('admin-panel/dist/js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-panel/dist/js/pages/dashboard.js')}}"></script>
<!-- <script>
  $(".dropdown-item").click(function(e){
    e.preventDefault();
    $(this).closest("form").submit();
});
</script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- Data table csv file export strat  -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script>

        $(document).ready(function() {
            // Hide the toast after 5 seconds (5000 milliseconds)
            setTimeout(function() {
                $('.toast').toast('hide');
            }, 5000);
        });
   

  $(document).ready(function() {
    $('#leadform').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Lead Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Lead Form Data'
            },  {
          extend: 'pdfHtml5',
          title: 'Lead Form Data'}, 'print'
        ]
    } );
} );
</script>

<script>
  $(document).ready(function() {
    $('#registrationform').DataTable( {
        "pageLength": 10, // Show 10 records per page
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ], // dropdown to select how many entries to show
        "responsive": true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Registration Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Registration Form Data'
            },  
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'TABLOID', // TABLOID OR LEGAL
   footer: true,
   title: 'Registration Form Data'
        }, 
        'print'
        ]
    } );
} );
</script>

<script>
  $(document).ready(function() {
    $('#feedbackform').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Feedback Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Feedback Form Data'
            }, 
             {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'TABLOID', // TABLOID OR LEGAL
   footer: true,
   title: 'Feedback Form Data'
        },
        'print'
        ]
    } );
} );

</script>

<script>
  $(document).ready(function() {
    $('#careerform').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Career Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Career Form Data'
            },  
            {
          extend: 'pdfHtml5',
          title: 'Career Form Data'
            },
           'print'
        ]
    } );
} );
</script>

<script>
  $(document).ready(function() {
    $('#contactform').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Contactus Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Contactus Form Data'
            }, 
            {
          extend: 'pdfHtml5',
          title: 'Contactus Form Data'}
          , 'print'
        ]
    } );
} );
</script>

<script>
  $(document).ready(function() {
    $('#Kamyabjawanform').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Kamyab-jawan Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Kamyab-jawan Form Data'
            },
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'b0', // TABLOID OR LEGAL
   footer: true,
   title: 'Kamyab jawan Form Data'
        }
          , 'print'
        ]
    } );
} );
</script>

<script>
  $(document).ready(function() {
    $('#assesment').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Assesment TNA 2025 Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Assesment TNA 2025 Data'
            },
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'a4', // TABLOID OR LEGAL
   footer: true,
   title: 'Assesment TNA 2025 Data'
        }
          , 'print'
        ]
    } );
} );
</script>

<script>
  $(document).ready(function() {
    $('#funnelform').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Funnel Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Funnel Form Data'
            },
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'b0', // TABLOID OR LEGAL
   footer: true,
   title: 'Funnel Form Data'
        }
          , 'print'
        ]
    } );
} );
</script>

<script>
  $(document).ready(function() {
    $('#appointmentform').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Book-appointment Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Book-appointment Form Data'
            },
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'b0', // TABLOID OR LEGAL
   footer: true,
   title: 'Book-appointment Form Data'
        }
          , 'print'
        ]
    } );
} );
</script>
<!-- Data table csv file export End  -->

<script>
  $(document).ready(function() {
    $('#cfmarecorded').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'CFMA-Recorded Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'CFMA-Recorded Form Data'
            },
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'b0', // TABLOID OR LEGAL
   footer: true,
   title: 'CFMA-Recorded Form Data'
        }
          , 'print'
        ]
    } );
} );
</script>
<!-- Data table csv file export End  -->

<!-- delete Confirmations start  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>
<!-- delete Confirmations End  -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="{{asset('js/images-slider.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="{{asset('js/hover-card.js')}}"></script>
    <script src="{{asset('js/floating-wpp.min.js')}}"></script>

    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script>
        AOS.init({
  duration: 1000,
})
    </script>

</body>
</html>
