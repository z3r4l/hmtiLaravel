<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard HMTI</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/logoHMTI.svg') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    
    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">



        <!--**********************************
            header start
        ***********************************-->
        @include('backend.layouts.header')

        <!--**********************************
            header end
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('backend.layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                {{-- <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>Welcome here</span></h4>
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a>
                            </li>
                            <li class="breadcrumb-item active">Blank</li>
                        </ol>
                    </div>
                </div> --}}
                @yield('content')
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed by <a href="https://themeforest.net/user/digitalheaps">Digitalheaps</a>,
                    Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->


        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger" href="javascript:void(0)">
                <span><i class="mdi mdi-tune"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#home8"><span><i
                                    class="mdi mdi-wrench" aria-hidden="true"></i>
                            </span></a>
                    </li>
                </ul>

                <div class="tab-content tab-content-default tabcontent-border">
                    <div class="tab-pane fade active show" id="home8" role="tabpanel">
                        <div class="admin-settings">
                            <h4>Pick your style</h4>
                            <div>
                                <p>Background</p>
                                <select class="form-control" name="theme_version" id="theme_version">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div>
                                <p>Layout</p>
                                <select class="form-control" name="theme_layout" id="theme_layout">
                                    <option value="vertical">Vertical</option>
                                    <option value="horizontal">Horizontal</option>
                                </select>
                            </div>
                            <div>
                                <p>Sidebar</p>
                                <select class="form-control" name="sidebar_style" id="sidebar_style">
                                    <option value="full">Full</option>
                                    <option value="mini">Mini</option>
                                    <option value="compact">Compact</option>
                                    <option value="overlay">Overlay</option>
                                </select>
                            </div>
                            <div>
                                <p>Sidebar position</p>
                                <select class="form-control" name="sidebar_position" id="sidebar_position">
                                    <option value="static">Static</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                            <div>
                                <p>Header position</p>
                                <select class="form-control" name="header_position" id="header_position">
                                    <option value="static">Static</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                            <div>
                                <p>Container</p>
                                <select class="form-control" name="container_layout" id="container_layout">
                                    <option value="wide">Wide</option>
                                    <option value="boxed">Boxed</option>
                                    <option value="wide-boxed">Wide Boxed</option>
                                </select>
                            </div>
                            <div>
                                <p>Direction</p>
                                <select class="form-control" name="theme_direction" id="theme_direction">
                                    <option value="ltr">LTR</option>
                                    <option value="rtl">RTL</option>
                                </select>
                            </div>
                            <div>
                                <p>Navigation Header</p>
                                <div>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_1"
                                            class="filled-in chk-col-primary" id="nav_header_bg_1">
                                        <label for="nav_header_bg_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_2"
                                            class="filled-in chk-col-primary" id="nav_header_bg_2">
                                        <label for="nav_header_bg_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_3"
                                            class="filled-in chk-col-primary" id="nav_header_bg_3">
                                        <label for="nav_header_bg_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_4"
                                            class="filled-in chk-col-primary" id="nav_header_bg_4">
                                        <label for="nav_header_bg_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_5"
                                            class="filled-in chk-col-primary" id="nav_header_bg_5">
                                        <label for="nav_header_bg_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_6"
                                            class="filled-in chk-col-primary" id="nav_header_bg_6">
                                        <label for="nav_header_bg_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_7"
                                            class="filled-in chk-col-primary" id="nav_header_bg_7">
                                        <label for="nav_header_bg_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_8"
                                            class="filled-in chk-col-primary" id="nav_header_bg_8">
                                        <label for="nav_header_bg_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_9"
                                            class="filled-in chk-col-primary" id="nav_header_bg_9">
                                        <label for="nav_header_bg_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_10"
                                            class="filled-in chk-col-primary" id="nav_header_bg_10">
                                        <label for="nav_header_bg_10"></label>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>Header</p>
                                <div>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_1"
                                            class="filled-in chk-col-primary" id="header_bg_1">
                                        <label for="header_bg_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_2"
                                            class="filled-in chk-col-primary" id="header_bg_2">
                                        <label for="header_bg_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_3"
                                            class="filled-in chk-col-primary" id="header_bg_3">
                                        <label for="header_bg_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_4"
                                            class="filled-in chk-col-primary" id="header_bg_4">
                                        <label for="header_bg_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_5"
                                            class="filled-in chk-col-primary" id="header_bg_5">
                                        <label for="header_bg_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_6"
                                            class="filled-in chk-col-primary" id="header_bg_6">
                                        <label for="header_bg_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_7"
                                            class="filled-in chk-col-primary" id="header_bg_7">
                                        <label for="header_bg_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_8"
                                            class="filled-in chk-col-primary" id="header_bg_8">
                                        <label for="header_bg_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_9"
                                            class="filled-in chk-col-primary" id="header_bg_9">
                                        <label for="header_bg_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_10"
                                            class="filled-in chk-col-primary" id="header_bg_10">
                                        <label for="header_bg_10"></label>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>Sidebar</p>
                                <div>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_1"
                                            class="filled-in chk-col-primary" id="sidebar_bg_1">
                                        <label for="sidebar_bg_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_2"
                                            class="filled-in chk-col-primary" id="sidebar_bg_2">
                                        <label for="sidebar_bg_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_3"
                                            class="filled-in chk-col-primary" id="sidebar_bg_3">
                                        <label for="sidebar_bg_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_4"
                                            class="filled-in chk-col-primary" id="sidebar_bg_4">
                                        <label for="sidebar_bg_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_5"
                                            class="filled-in chk-col-primary" id="sidebar_bg_5">
                                        <label for="sidebar_bg_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_6"
                                            class="filled-in chk-col-primary" id="sidebar_bg_6">
                                        <label for="sidebar_bg_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_7"
                                            class="filled-in chk-col-primary" id="sidebar_bg_7">
                                        <label for="sidebar_bg_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_8"
                                            class="filled-in chk-col-primary" id="sidebar_bg_8">
                                        <label for="sidebar_bg_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_9"
                                            class="filled-in chk-col-primary" id="sidebar_bg_9">
                                        <label for="sidebar_bg_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_10"
                                            class="filled-in chk-col-primary" id="sidebar_bg_10">
                                        <label for="sidebar_bg_10"></label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('/assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('/assets/js/settings.js') }}"></script>
    <script src="{{ asset('/assets/js/gleek.js') }}"></script>
    <script src="{{ asset('/assets/js/styleSwitcher.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>


    <!--**********************************
        Scripts DataTables
    ***********************************-->
    <script src="{{ asset('/assets/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins-init/datatables.init.js') }}"></script>


</body>

</html>