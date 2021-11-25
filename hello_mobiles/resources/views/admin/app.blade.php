<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Hello Mobiles</title>
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="css/helping/helping.css"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    {{-- <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css'> --}}
    <!--===============================================================================================-->

  {{-- <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" type="text/css" href="css/login/util.css">
  <link rel="stylesheet" type="text/css" href="css/login/login.css"> --}}
    <style>

        a {
            color:firebrick;
            text-decoration: none;
            background-color: transparent;
        }
        .page-item.active .page-link
        {
            color: white;
            background-color:firebrick !Important;
            border: solid 1px firebrick !Important;
        }
        .page-item.previous{
            color: firebrick;
        }
        
        </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>




        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4" style="background-color: #f4f5eb">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('dist/img/logo.svg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="object-fit: cover; border-radius:50%;">
                <span class="brand-text font-weight-light" style="font-weight:bold; font-size: 30; color:#cb4154">Hello
                    Mobiles</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @if (Auth::user()->profile_image == null)
                            <img src="{{ asset('dist/img/user.png') }}" alt="user"
                                style="object-fit: cover; border-radius:50%; width:30px; height:32px;">


                        @else



                            <img src="{{ url('profileImage/' . Auth::user()->profile_image) }}"
                                class="img-circle elevation-2" alt="User"
                                style="object-fit: cover; border-radius:50%; width:30px; height:32px;">
                        @endif
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        {{-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> --}}
                        {{-- <li class="nav-item active">
            <a class="nav-link"  aria-current="page" href="/home">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> --}}
                        <li class="nav-item active">
                            <a class="nav-link{{ $activePage == 'dashboard' ? ' active' : '' }}" aria-current="page"
                                href="/home">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link{{ $activePage == 'category' ? ' active' : '' }}" aria-current="page"
                                href="/categories">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'subcategory' ? ' active' : '' }}"
                                aria-current="page" href="/subcategories">
                                <i class="nav-icon fas fa-object-group"></i>
                                <p>
                                    Sub Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'product' ? ' active' : '' }}" aria-current="page"
                                href="/products">
                                <i class="nav-icon fa fa-copy"></i>
                                <p>
                                    View products
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'profileuser' ? ' active' : '' }}" aria-current="page"
                                href="/profile/{{ Auth::user()->id }}">
                                <i class="nav-icon fa fa-user-circle"></i>
                                <p>
                                    User Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'profile' ? ' active' : '' }}" aria-current="page"
                                href="/profile">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    User Management
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'secondhandproduct' ? ' active' : '' }}"
                                aria-current="page" href="/secondhandproducts">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>
                                    Secondhand Product
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'faqs' ? ' active' : '' }}"
                                aria-current="page" href="/faqs">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    FAQ
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'invoice' ? ' active' : '' }}"
                                aria-current="page" href="/invoice">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>
                                    Invoice
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link{{ $activePage == 'slider' ? ' active' : '' }}"
                                aria-current="page" href="/slider">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Slider
                                </p>
                            </a>
                        </li>



                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    logout
                                </p>
                            </a>

                        </li>




                        {{-- <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
               {{ __('Logout') }}
           </a> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        </a>
                     
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
            
                  <p  id="alert" class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
              </div> <!-- end .flash-message -->


            <!-- /.content-header -->
            <br>

            @yield('content')
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Designed by <a href="https://dhirajstha.com.np/" target="_blank">Dhiraj Shrestha</a>
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-{{ now()->year }} <a href="https://adminlte.io">Hello Mobiles</a>.</strong>
            All rights reserved.
        </footer>

        
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
     <!--===============================================================================================-->
     {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
     <!--===============================================================================================-->
  
     <!--===============================================================================================-->
  
     {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
     <!--===============================================================================================-->
  
     <script src="js/login/main.js"></script>
     {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> --}}
     
     {{-- <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script> --}}

    <script>
        // $("#datatable").DataTable();


        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                "pageLength": 5,


                dom: 'Bfrtip',
                buttons: [{
                        extend: 'csv',
                        text: window.csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        text: window.excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'pdf',
                        text: window.pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'print',
                        text: window.printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ],
                columnDefs: [{
                    visible: false
                }]
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            var table = $('#datatable2').DataTable({
                "pageLength": 5,


                dom: 'Bfrtip',
                buttons: [{
                        extend: 'csv',
                        text: window.csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        text: window.excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'pdf',
                        text: window.pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'print',
                        text: window.printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ],
                columnDefs: [{
                    visible: false
                }]
            });
        });

    </script>

<script>
    $(document).on("change keyup blur", "#discount", function() {
        var main = $('#price').val();
        var disc = $('#discount').val();
        var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
        var mult = main * dec; // gives the value for subtract from main value
        var discont = main - mult;
        $('#sp').val(discont);
    });
  </script>




  {{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}

    <script type="text/javascript">
        $('#img_file_upld').on('change', function(ev) {
            console.log("here inside");

            var filedata = this.files[0];
            var imgtype = filedata.type;


            var match = [ 'image/png','image/jpeg', 'image/jpg',];

            if ((imgtype == match[0]) || (imgtype == match[1]) || (imgtype == match[2])) {
                $('#mgs_ta').empty();

                $('#sendButton').html(
                '<button type="submit" class="btn btn-danger btn-sm">Upload</button>');

            //---image preview

            var reader = new FileReader();

            reader.onload = function(ev) {
                $('#img_prv').attr('src', ev.target.result);
            }
            reader.readAsDataURL(this.files[0]);

            //   /// preview end

          

            } else {
                $('#mgs_ta').html(
                    '<p style="color:red">Sorry! Image format is not supported <br>Try with other format</p>');

                    $('#sendButton').html(
                '<button type="submit" disabled class="btn btn-danger btn-sm">Upload</button>');

         


    

            }

        });

    </script>

    <script>
        var vidFileLength = $("#img_file_upld")[0].files.length;
        if (vidFileLength == 0) {


            $('#sendButton').html(
                '<button type="submit" disabled class="btn btn-danger btn-sm">Upload</button>');

        } else {
            console.log("may be");
            $('#sendButton').html(
                '<button type="submit" class="btn btn-danger btn-sm">Upload</button>');

        }

    </script>

    <script>
        setTimeout(function() {

        // Do something after 3 seconds

        $('#alert').hide();
      

        }, 1500);
    </script>



</body>

</html>
