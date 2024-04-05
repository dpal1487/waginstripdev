<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="{{ asset('dashboard/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <script src="{{ asset('dashboard/js/jqueryy.js') }}"></script>
    <link href="{{ asset('dashboard/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-white"
                href="{{ url('/admin/dashbord') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('dashboard/images/logo.png') }}" alt="" width="220">
                </div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.dashboard.admin') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/hotel-offer') }}">
                    <i class="fa fa-hotel"></i>
                    <span> Hotel Entry </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/airline-offer') }}">
                    <i class="fa fa-plane"></i>
                    <span> Airline Entry </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/offer-package') }}">
                    <i class="fa fa-gift"></i>
                    <span> Offer Package </span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav  Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::guard('admin')->user()->name }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<!DOCTYPE html>
<html lang=" en">

                                    <head>
                                        <meta charset="utf-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport"
                                            content="width=device-width, initial-scale=1, shrink-to-fit=no">
                                        <meta name="description" content="">
                                        <meta name="author" content="">
                                        <title>@yield('title')</title>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                        <meta name="csrf-token" content="{{ csrf_token() }}" />
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                                        <link href="{{ asset('dashboard/fontawesome-free/css/all.min.css') }}"
                                            rel="stylesheet" type="text/css">
                                        <link rel="stylesheet"
                                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <link
                                            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                                            rel="stylesheet">
                                        <!-- Custom styles for this template-->
                                        <link href="{{ asset('dashboard/css/sb-admin-2.min.css') }}"
                                            rel="stylesheet">
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
                                        <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
                                        <script src="{{ asset('dashboard/js/jqueryy.js') }}"></script>
                                        <link href="{{ asset('dashboard/datatables/dataTables.bootstrap4.min.css') }}"
                                            rel="stylesheet">
                                        <link
                                            href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
                                            rel="stylesheet" />
                                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                                    </head>

                                    <body id="page-top">
                                        <!-- Page Wrapper -->
                                        <div id="wrapper">
                                            <!-- Sidebar -->
                                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
                                                id="accordionSidebar">
                                                <!-- Sidebar - Brand -->
                                                <a class="sidebar-brand d-flex align-items-center justify-content-center bg-white"
                                                    href="{{ url('/admin/dashbord') }}">
                                                    <div class="sidebar-brand-icon">
                                                        <img src="{{ asset('dashboard/images/logo.png') }}" alt=""
                                                            width="220">
                                                    </div>
                                                </a>
                                                <!-- Divider -->
                                                <hr class="sidebar-divider my-0">
                                                <!-- Nav Item - Dashboard -->
                                                <li class="nav-item active">
                                                    <a class="nav-link"
                                                        href="{{ route('admin.dashboard.admin') }}">
                                                        <i class="fas fa-fw fa-tachometer-alt"></i>
                                                        <span>Dashboard</span></a>
                                                </li>
                                                <hr class="sidebar-divider">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/admin/hotel-offer') }}">
                                                        <i class="fa fa-hotel"></i>
                                                        <span> Hotel Entry </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/admin/airline-offer') }}">
                                                        <i class="fa fa-plane"></i>
                                                        <span> Airline Entry </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/admin/offer-package') }}">
                                                        <i class="fa fa-gift"></i>
                                                        <span> Offer Package </span>
                                                    </a>
                                                </li>
                                                <hr class="sidebar-divider d-none d-md-block">
                                                <div class="text-center d-none d-md-inline">
                                                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                                </div>
                                            </ul>
                                            <div id="content-wrapper" class="d-flex flex-column">
                                                <!-- Main Content -->
                                                <div id="content">
                                                    <!-- Topbar -->
                                                    <nav
                                                        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                                                        <!-- Sidebar Toggle (Topbar) -->
                                                        <button id="sidebarToggleTop"
                                                            class="btn btn-link d-md-none rounded-circle mr-3">
                                                            <i class="fa fa-bars"></i>
                                                        </button>
                                                        <!-- Topbar Navbar -->
                                                        <ul class="navbar-nav ml-auto">
                                                            <!-- Nav  Item - User Information -->
                                                            <li class="nav-item dropdown no-arrow">
                                                                <a class="nav-link dropdown-toggle" href="#"
                                                                    id="userDropdown" role="button"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <span
                                                                        class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::guard('admin')->user()->name }}</span>
                                                                </a>
                                                                <!-- Dropdown - User Information -->
                                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                                    aria-labelledby="userDropdown">
                                                                    <a class="dropdown-item" href="#">
                                                                        <i
                                                                            class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                        Profile
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <form method="POST"
                                                                        action="{{ route('logout') }}">
                                                                        @csrf
                                                                        <a class="dropdown-item"
                                                                            href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                                            <i
                                                                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                            {{ __('Logout') }}
                                                                        </a>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    <!-- End of Topbar -->
                                                    <!-- Begin Page Content -->
                                                    <div class="container-fluid">
                                                        @section('body')
                                                        @show
                                                    </div>
                                                </div>
                                                <!-- End of Main Content -->
                                                <!-- Footer -->
                                                <footer class="sticky-footer bg-white">
                                                    <div class="container my-auto">
                                                        <div class="copyright text-center my-auto">
                                                            <span>Powered By <a href="#">XYZ | Admin</a></span>
                                                        </div>
                                                    </div>
                                                </footer>
                                                <!-- End of Footer -->
                                            </div>
                                            <!-- End of Content Wrapper -->
                                        </div>
                                        <!-- End of Page Wrapper -->
                                        <!-- Scroll to Top Button-->
                                        <a class="scroll-to-top rounded" href="#page-top">
                                            <i class="fas fa-angle-up"></i>
                                        </a>
                                        <!-- Bootstrap core JavaScript-->
                                        <script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>
                                        @yield('script')

                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                        <script>
                                            CKEDITOR.replace('activities');
                                        </script>
                                        <script>
                                            CKEDITOR.replace('summry');
                                        </script>
                                    </body>

</html>">
<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Profile
</a>
<div class="dropdown-divider"></div>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        {{ __('Logout') }}
    </a>
</form>
</div>
</li>
</ul>
</nav>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    @section('body')
    @show
</div>
</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Powered By <a href="#">XYZ | Admin</a></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>
@yield('script')

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('activities');
</script>
<script>
    CKEDITOR.replace('summry');
</script>
</body>

</html>
