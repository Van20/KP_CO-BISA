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
    <title>My Order</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-quill-editor.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-todo.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

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
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Yudivan Ilham Santoso</span><span class="user-status">Admin</span></div>
                    <span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
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
    <div class="app-content content todo-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <h2 class="content-header-title float-start mb-1">My Order</h2>
        <div class="content-area-wrapper container-xxl p-0">
            <div class="content-right">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="body-content-overlay"></div>
                        <div class="todo-app-list">
                            <!-- Todo List starts -->
                            <div class="todo-task-list-wrapper list-group">
                                @foreach($all_order as $order)
                                <ul class="todo-task-list media-list" id="todo-task-list">
                                    
                                    
                                    <a href="#" data-toggle="modal" data-bs-toggle="tooltip" data-target="#closeModal<?php echo $order->id; ?>">
                                        <li class="todo-item">
                                            <div class="todo-title-wrapper">
                                                <div class="todo-title-area">
                                                    <i data-feather="more-vertical" class="drag-icon"></i>
                                                    <div class="title-wrapper">
                                                        <!-- Description lists horizontal -->
                                                        <span>
                                                            <dl class="row">
                                                                <dt class="col-sm-3">No Order</dt>
                                                                <dd class="col-sm-9">{{ $order->no_order }}</dd>
                                                            </dl>
                                                            <dl class="row">
                                                                <dt class="col-sm-3">STO</dt>
                                                                <dd class="col-sm-9"><span class="badge rounded-pill badge-light-danger">{{ $order->sto_name }}</span></dd>
                                                            </dl>
                                                            <dl class="row">
                                                                <dt class="col-sm-3">Nama Customer</dt>
                                                                <dd class="col-sm-9">{{ $order->customer_name }}</dd>
                                                            </dl>
                                                            <dl class="row">
                                                                <dt class="col-sm-3">Alamat Customer</dt>
                                                                <dd class="col-sm-9">{{ $order->alamat }}</dd>
                                                            </dl>
                                                            <dl class="row">
                                                                <dt class="col-sm-3">PIC</dt>
                                                                <dd class="col-sm-9">{{ $order->pic }}</dd>
                                                            </dl>
                                                        </span>
                                                        <!--/ Description lists horizontal-->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <!-- Assign screen modal -->
                                    <div class="modal fade" id="closeModal<?php echo $order->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">

                                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                                <div class="text-center mb-2 mt-2">
                                                    <h1 class="mb-1">Close Order</h1>
                                                    <p class="mb-3">Pastikan data order sudah terisi dengan benar.</p>
                                                </div>
                                                    <form id="closeForm<?php echo $order->id; ?>" class="form" action="/form_order_close/{id}" method="get">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="id" value="{{ $order->id }}"> 
                                                        <div class="row">
                                                            <span>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">No Order</dt>
                                                                    <dd class="col-sm-9">{{ $order->no_order }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">STO</dt>
                                                                    <dd class="col-sm-9"><span class="badge rounded-pill badge-light-danger">{{ $order->sto_name }}</span></dd>
                                                                </dl>
                                                                    <dl class="row">
                                                                    <dt class="col-sm-3">Nama Customer</dt>
                                                                    <dd class="col-sm-9">{{ $order->customer_name }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">Alamat Customer</dt>
                                                                    <dd class="col-sm-9">{{ $order->alamat }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">Tgl Order</dt>
                                                                    <dd class="col-sm-9">{{ $order->tgl_order }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">Order Type</dt>
                                                                    <dd class="col-sm-9">{{ $order->order_type }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">Segment</dt>
                                                                    <dd class="col-sm-9">{{ $order->segment }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">Bandwidth</dt>
                                                                    <dd class="col-sm-9">{{ $order->bandwidth }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">PIC</dt>
                                                                    <dd class="col-sm-9">{{ $order->pic }}</dd>
                                                                </dl>
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">Note</dt>
                                                                    <dd class="col-sm-9">{{ $order->note_assign}}</dd>
                                                                </dl>
                                                            </span>
                                                            <div class="col-12">
                                                            <a href="/form_order_close/{{ $order->id }}">
                                                                <button type="button" class="btn btn-relief-primary btn-gradient-primary ms-1" data-bs-toggle="tooltip" title="Close Order">
                                                                    <span>Close Order</span>
                                                                </button>
                                                            </a>
                                                                <button type="reset" class="btn btn-outline-secondary">Reject</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Assign screen modal -->
                                </ul>
                                @endforeach
                                <div class="no-results">
                                    <h5>No Items Found</h5>
                                </div>
                            </div>
                            <!-- Todo List ends -->
                        </div>
                    </div>
                </div>
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
    <script src="../../../app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-todo.js"></script>
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