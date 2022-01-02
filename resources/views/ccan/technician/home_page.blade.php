<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Home Page</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-invoice-list.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

      <!-- BEGIN: Header-->
      <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Search..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="page-profile.html">
                            <i class="me-50" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="page-account-settings-account.html">
                            <i class="me-50" data-feather="settings"></i> Settings</a>
                        <a class="dropdown-item" href="auth-login-cover.html">
                            <i class="me-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

   <!-- BEGIN: Main Menu-->
   <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="/dashboard_admin">
                            <div class="user-nav d-sm-flex d-none"></div><img class="round" src="../../../app-assets/images/portrait/small/co.png" height="30" width="25">
                            <h1 class="brand-text"><b>-  B I S A</b></h1>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/home_page"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="HomePage">Home Page</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/order"><i data-feather="briefcase"></i><span class="menu-title text-truncate" data-i18n="MyOrder">My Order</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/profile_page"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Dashboards">My Profile</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Greetings Card starts -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card card-congratulations">
                                <div class="card-body text-center">
                                    <img src="../../../app-assets/images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left" />
                                    <img src="../../../app-assets/images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right" />
                                    <div class="avatar avatar-xl bg-primary shadow">
                                        <div class="avatar-content">
                                            <i data-feather="award" class="font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-1 text-white">Hi, Admin CO-BISA</h1>
                                        <p class="card-text m-auto w-75">
                                            Please do the <strong>BEST</strong> for the <strong>BEST</strong> result. We can do it!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Greetings Card ends -->

                        <!-- Subscribers Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder mt-1">12</h2>
                                    <p class="card-text">Technician Presence</p>
                                </div>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <!-- Subscribers Chart Card ends -->

                        <!-- Orders Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="package" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder mt-1">5</h2>
                                    <p class="card-text">Today's Total Order</p>
                                </div>
                                <div id="order-chart"></div>
                            </div>
                        </div>
                        <!-- Orders Chart Card ends -->
                    </div>
                    
                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-8 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Photo</th>
                                                    <th>NIK</th>
                                                    <th>Name</th>
                                                    <th>Order Assigned</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="fw-bolder">19940226</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span>Wisnu Hernindya N</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column align-items-center">
                                                            <span class="fw-bolder mb-25">3</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Company Table Card -->
                    <!-- Employee Task Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-employee-task">
                            <div class="card-header">
                                <h4 class="card-title">Performance Leaderboard</h4>
                            </div>
                            <div class="card-body">
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Ryan Harrington</h6>
                                            <small>iOS Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">9hr 20m</small>
                                        <div class="employee-task-chart-primary-1"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Louisa Norton</h6>
                                            <small>UI Designer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">4hr 17m</small>
                                        <div class="employee-task-chart-danger"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Jayden Duncan</h6>
                                            <small>Java Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">12hr 8m</small>
                                        <div class="employee-task-chart-success"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Cynthia Howell</h6>
                                            <small>Anguler Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">3hr 19m</small>
                                        <div class="employee-task-chart-secondary"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-16.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Helena Payne</h6>
                                            <small>Marketing</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">9hr 50m</small>
                                        <div class="employee-task-chart-warning"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-13.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Troy Jensen</h6>
                                            <small>iOS Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">4hr 48m</small>
                                        <div class="employee-task-chart-primary-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Employee Task Card -->
                    </div>

                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-invoice-list.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>