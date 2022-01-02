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
    <title>User View - Account - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
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
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Nina Aulia Ramadhani</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
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
                <li class="nav-item me-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                            <div class="user-nav d-sm-flex d-none"></div><img class="round" src="../../../app-assets/images/portrait/small/co.png" height="30" width="25">
                            <h1 class="brand-text"><b>-  B I S A</b></h1>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/dashboard_admin"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i data-feather="grid"></i><span class="menu-item text-truncate" data-i18n="Kanban">Order Datin</span></a>
                <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/list_order"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">List Order</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{!! url('/customer_data'); !!}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Customer Data</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Technician</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/performansi_teknisi"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Performance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/detail_teknisi"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Data</span></a>
                        </li>
                    </ul>
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
                <section class="app-user-view-account">
                    <div class="row">
                        <!-- User Sidebar -->
                        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                            <!-- User Card -->
                            <div class="card">
                                <div class="card-body">
                                            <div class="user-avatar-section">
                                                <div class="d-flex align-items-center flex-column">
                                                    <img class="img-fluid rounded mt-3 mb-2" src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" height="110" width="110" alt="User avatar" />
                                                    <div class="user-info text-center">
                                                        <span class="badge bg-light-secondary">Teknisi Provisioning BGES</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-around my-2 pt-75">
                                                <div class="d-flex align-items-start me-2">
                                                    <span class="badge bg-light-primary p-75 rounded">
                                                        <i data-feather="check" class="font-medium-2"></i>
                                                    </span>
                                                    <div class="ms-75">
                                                        <h4 class="mb-0">1.23k</h4>
                                                        <small>Tasks Done</small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                                    <span class="badge bg-light-primary p-75 rounded">
                                                        <i data-feather="briefcase" class="font-medium-2"></i>
                                                    </span>
                                                    <div class="ms-75">
                                                        <h4 class="mb-0">568</h4>
                                                        <small>Projects Done</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                                            <div class="info-container">
                                                <ul class="list-unstyled">
                                                    @foreach($all_teknisi as $data_all_teknisi)
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Nama : </span>
                                                        <span>{{ $data_all_teknisi->teknisi_name }}</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">NIK : </span>
                                                        <span>{{ $data_all_teknisi->nik }}</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Status : </span>
                                                        <span class="badge bg-light-success">Active</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Tgl Lahir : </span>
                                                        <span>{{ $data_all_teknisi->tgl_lahir }}</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Email : </span>
                                                        <span>n{{ $data_all_teknisi->email }}</span>
                                                    </li>
                                                    <li class="mb-75">
                                                        <span class="fw-bolder me-25">Contact:</span>
                                                        <span>082230291804</span>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                            </div>
                            <!-- /User Card -->
                        </div>
                        <!--/ User Sidebar -->

                        <!-- User Content -->
                        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                          
                        <!-- Responsive tables start -->
                        <div class="row" id="table-responsive">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Detail Technician's Point</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr style="text-align:center">
                                                    <th scope="col" class="text-nowrap">#</th>
                                                    <th scope="col" class="text-nowrap">Nomor Order</th>
                                                    <th scope="col" class="text-nowrap">Tgl Order</th>
                                                    <th scope="col" class="text-nowrap">Order Type</th>
                                                    <th scope="col" class="text-nowrap">Product Name</th>
                                                    <th scope="col" class="text-nowrap">Bandwidth</th>
                                                    <th scope="col" class="text-nowrap">Customer Name</th>
                                                    <th scope="col" class="text-nowrap">Alamat</th>
                                                    <th scope="col" class="text-nowrap">STO</th>
                                                    <th scope="col" class="text-nowrap">PIC</th>
                                                    <th scope="col" class="text-nowrap">Tgl Selesai</th>
                                                    <th scope="col" class="text-nowrap">Jumlah Point</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($all_teknisi as $data_all_teknisi)
                                                <tr style="text-align:center">
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->no_order }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->tgl_order }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->order_type }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->product_name }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->bandwidth }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->customer_name }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->alamat }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->sto_name }}</td>
                                                    <td class="text-nowrap">{{ $data_all_teknisi->pic }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive tables end -->
                        </div>
                    
                        <!--/ User Content -->
                    </div>
                </section>
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
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/modal-edit-user.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-user-view-account.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-user-view.js"></script>
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