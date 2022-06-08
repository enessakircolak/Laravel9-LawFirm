<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kapella Bootstrap Admin Dashboard Template</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/base/vendor.bundle.base.css">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/kapella-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="{{asset('assets')}}https://www.bootstrapdash.com/product/kapella-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container-fluid">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                    <ul class="navbar-nav navbar-nav-left">
                        <li class="nav-item ms-0 me-5 d-lg-flex d-none">
                            <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-bell mx-0"></i>
                                <span class="count bg-success">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-information mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-account-box mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-email mx-0"></i>
                                <span class="count bg-primary">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('assets')}}/admin/images/faces/face4.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            The meeting is cancelled
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('assets')}}/admin/images/faces/face2.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            New product launch
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('assets')}}/admin/images/faces/face3.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            Upcoming board meeting
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
                        </li>
                        <li class="nav-item nav-search d-none d-lg-block ms-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                                </div>
                                <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('assets')}}/admin/imagees/logo.svg" alt="logo"/></a>
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets')}}/admin/imagees/logo-mini.svg" alt="logo"/></a>
                    </div>




                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown  d-lg-flex d-none">
                            <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                        </li>
                        <li class="nav-item dropdown d-lg-flex d-none">
                            <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-bs-toggle="dropdown">
                                Reports
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                                <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                                <a class="dropdown-item">
                                    <i class="mdi mdi-file-pdf text-primary"></i>
                                    Pdf
                                </a>
                                <a class="dropdown-item">
                                    <i class="mdi mdi-file-excel text-primary"></i>
                                    Exel
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-lg-flex d-none">
                            <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                                <span class="nav-profile-name">Johnson</span>
                                <span class="online-status"></span>
                                <img src="{{asset('assets')}}/admin/images/faces/face28.png" alt="profile"/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-file-document-box menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-cube-outline menu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/basic_elements.html" class="nav-link">
                            <i class="mdi mdi-chart-areaspline menu-icon"></i>
                            <span class="menu-title">Form Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="mdi mdi-finance menu-icon"></i>
                            <span class="menu-title">Charts</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/tables/basic-table.html" class="nav-link">
                            <i class="mdi mdi-grid menu-icon"></i>
                            <span class="menu-title">Tables</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/icons/mdi.html" class="nav-link">
                            <i class="mdi mdi-emoticon menu-icon"></i>
                            <span class="menu-title">Icons</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-codepen menu-icon"></i>
                            <span class="menu-title">Sample Pages</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="docs/documentation.html" class="nav-link">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Documentation</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <td><a href="/admin"> <button type="button" class="btn btn-behance btn-sm">Home</button></a> </td>
    <td><a href="/admin/category"> <button type="button" class="btn btn-primary btn-sm">Category</button></a> </td>
    <td><a href="/admin/message"> <button type="button" class="btn btn-success btn-sm">Messages</button></a> </td>
    <td><a href="/admin/appointment"> <button type="button" class="btn btn-warning btn-sm">Appointment</button></a> </td>
    <td><a href="/admin/setting"> <button type="button" class="btn btn-dark btn-sm">Setting</button></a> </td>

            <footer class="footer">
                <div class="footer-wrap">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="{{asset('assets')}}/admin/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('assets')}}/admin/js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<script src="{{asset('assets')}}/admin/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
<script src="{{asset('assets')}}/admin/vendors/justgage/raphael-2.1.4.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/justgage/justgage.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery.cookie.js" type="text/javascript"></script>
<!-- Custom js for this page-->
<script src="{{asset('assets')}}/admin/js/dashboard.js"></script>
<!-- End custom js for this page-->


@yield('content')

</body>
</html>
<!-- partial
                    <div class="container-fluid page-body-wrapper">
                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 mb-4 mb-xl-0">
                                        <div class="d-lg-flex align-items-center">
                                            <div>
                                                <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                                                <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
                                            </div>
                                            <div class="ms-lg-5 d-lg-flex d-none">
                                                <button type="button" class="btn bg-white btn-icon">
                                                    <i class="mdi mdi-view-grid text-success"></i>
                                                </button>
                                                <button type="button" class="btn bg-white btn-icon ms-2">
                                                    <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-md-end">
                                            <div class="pe-1 mb-3 mb-xl-0">
                                                <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                                    Feedback
                                                    <i class="mdi mdi-message-outline btn-icon-append"></i>
                                                </button>
                                            </div>
                                            <div class="pe-1 mb-3 mb-xl-0">
                                                <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                                    Help
                                                    <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                                                </button>
                                            </div>
                                            <div class="pe-1 mb-3 mb-xl-0">
                                                <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                                    Print
                                                    <i class="mdi mdi-printer btn-icon-append"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8 grid-margin stretch-card">
                                        <div class="card">

                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                </div>
                                <div class="row">

                                </div>
                                <div class="row">

                                </div>
                            </div>
                            <!- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

