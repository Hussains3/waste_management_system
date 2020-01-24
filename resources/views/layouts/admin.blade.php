<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

    

    {{-- datatable css --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <!--Bootstrap date picker css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    
    

</head>

<body>
<div>
<div class="wrapper">

    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3> <a href="/">যশোর পৌরসভা</a></h3>
        </div>
        {{-- {{ config('app.name', ' যশোর পৌরসভা') }} --}}
        <ul class="list-unstyled components">
            <p><a href="/"> ড্যাশবোর্ড</a></p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">তথ্য সংযুক্ত করুন</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="/cars">গাড়ি</a>
                    </li>
                    <li>
                        <a href="/car_types">গাড়ির ধরন</a>
                    </li>
                    <li>
                        <a href="/wastes">বর্জ্য</a>
                    </li>
                    <li>
                        <a href="/waste_types"> বর্জ্যের ধরন</a>
                    </li>
                    <li>
                        <a href="/drivers">চালক</a>
                    </li>
                    <li>
                        <a href="/trips">ট্রিপ</a>
                    </li>
                    <li>
                        <a href="/users">ব্যাবহারকারী</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#productTypesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">রিপোর্টসমূহ</a>
                <ul class="collapse list-unstyled" id="productTypesSubmenu">
                    <li>
                        <a href="/reports/cars">গাড়ি</a>
                    </li>
                    <li>
                        <a href="/reports/wastes">বর্জ্য</a>
                    </li>
                    <li>
                        <a href="/reports/drivers">চালক</a>
                    </li>
                    <li>
                        <a href="/reports/trips">ট্রিপ</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/support" class="">সাপোর্ট</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a class="download dropdown-item" href="#">
                    {{ __('Logout') }}
                </a>

{{--                <a href="#" class="download">Log Out</a>--}}
            </li>
            <li>
                <a href="/" class="article">Back to Admin</a>
            </li>
        </ul>
    </nav>


    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    {{-- <span>Toggle Sidebar</span>--}}
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                DJ <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Page</a>--}}
{{--                        </li>--}}

                    </ul>
                </div>
            </div>
        </nav>

        <div id="content-main">

           
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            @yield('content')

        </div>


    </div>
</div>


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

{{-- Data table  --}}
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

{{--bootstrap JS--}}
<script src="{{ asset('js/admin.js') }}" ></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>



    <script>

        $(document).ready(function() {
            $('.select2_op').select2();
        });

    </script>

    <!-- <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script> -->

    @yield('scripts')
</body>

</html>
