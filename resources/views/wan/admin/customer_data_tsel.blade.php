<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
    <style type="text/css">
		input[type="file"]{
            display: none;
        }
	</style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Customer Data TSEL</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" href="../dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="../vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../dist/js/bootstrapValidator.js"></script>
    
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-wizard.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <!-- END: Page CSS-->

    <!-- NEW CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/modal-create-app.css">
   
    <!-- NEW CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
   
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

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
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Rizvan Dimas Saputra A</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
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
    <!-- <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Rizvan Dimas Saputra A</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul> -->
    <!-- <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul> -->
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="/dashboard_admin">
                    <!-- <span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                    </span>-->
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
                <!-- <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Chat</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Todo</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Calendar</span></a>
                </li> -->
                <li class=" nav-item"><a class="d-flex align-items-center" href="/list_assurance_wan"><i data-feather="grid"></i><span class="menu-item text-truncate" data-i18n="Kanban">Assurance WAN</span></a>
                <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/list_assurance_wan"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">List Tiket</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/customer_data_tsel"><i data-feather="book-open"></i><span class="menu-item text-truncate" data-i18n="Kanban">Data Customer</span></a>
                <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/customer_data_tsel"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">TSEL</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/customer_data_olo"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">OLO</span></a>
                        </li>
                    </ul>
                </li>
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">File Manager</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shield"></i><span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Roles &amp; Permission</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-access-roles.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">Roles</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-access-permission.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Permission</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">Shop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Details</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-checkout.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li> -->
                <li class=" nav-item"><a class="d-flex align-items-center" href="/performansi_teknisi"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Technician</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/performansi_teknisi"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Performance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/detail_teknisi"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Technician Data</span></a>
                            <!-- <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="app-user-view-account.html"><span class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-security.html"><span class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-billing.html"><span class="menu-item text-truncate" data-i18n="Billing &amp; Plans">Billing &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-notifications.html"><span class="menu-item text-truncate" data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-connections.html"><span class="menu-item text-truncate" data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul> -->
                        </li>
                        <li><a class="d-flex align-items-center" href="{!! url('/jadwal_teknisi'); !!}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Schedule</span></a>
                        </li>
                    </ul>
                
                
                </li>
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Account Settings">Account Settings</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-account-settings-account.html"><span class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-security.html"><span class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-billing.html"><span class="menu-item text-truncate" data-i18n="Billings &amp; Plans">Billings &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-notifications.html"><span class="menu-item text-truncate" data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-connections.html"><span class="menu-item text-truncate" data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-profile.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-faq.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-pricing.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-license.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">License</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-api-key.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">API Key</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Blog">Blog</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-blog-list.html"><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span class="menu-item text-truncate" data-i18n="Detail">Detail</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Welcome">Welcome</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Reset Password">Reset Password</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Deactivate Account">Deactivate Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Invoice">Invoice</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Promotional">Promotional</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Miscellaneous">Miscellaneous</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Not Authorized">Not Authorized</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-error.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Error">Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user-check"></i><span class="menu-title text-truncate" data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Login">Login</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-login-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-login-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Register">Register</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-register-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-multisteps.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Multi-Steps">Multi-Steps</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Forgot Password">Forgot Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Reset Password">Reset Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-reset-password-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-reset-password-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-verify-email-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-verify-email-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Two Steps">Two Steps</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-two-steps-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-two-steps-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="modal-examples.html"><i data-feather="square"></i><span class="menu-title text-truncate" data-i18n="Modal Examples">Modal Examples</span></a>
                </li> -->
                <!-- <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i data-feather="more-horizontal"></i>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="ui-typography.html"><i data-feather="type"></i><span class="menu-title text-truncate" data-i18n="Typography">Typography</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="ui-feather.html"><i data-feather="eye"></i><span class="menu-title text-truncate" data-i18n="Feather">Feather</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="credit-card"></i><span class="menu-title text-truncate" data-i18n="Card">Card</span><span class="badge badge-light-success rounded-pill ms-auto me-1">New</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="card-basic.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-advance.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-statistics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-actions.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="briefcase"></i><span class="menu-title text-truncate" data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="component-accordion.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Accordion">Accordion</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-alerts.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-avatar.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Avatar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-badges.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-breadcrumbs.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-buttons.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-carousel.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-collapse.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-divider.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Divider">Divider</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-dropdowns.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-list-group.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-modals.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-navs-component.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Navs Component">Navs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-offcanvas.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Offcanvas">Offcanvas</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pagination.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pill-badges.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pill Badges">Pill Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pills-component.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-popovers.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-progress.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-spinner.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Spinner">Spinner</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tabs-component.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-timeline.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-bs-toast.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tooltips.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Extensions">Extensions</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="ext-component-sweet-alerts.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Sweet Alert">Sweet Alert</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-blockui.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Block UI">BlockUI</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-toastr.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Toastr">Toastr</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-sliders.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Sliders">Sliders</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-drag-drop.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tour.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-clipboard.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Clipboard">Clipboard</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-media-player.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Media player">Media Player</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-context-menu.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Context Menu">Context Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-swiper.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="swiper">Swiper</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tree.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tree">Tree</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-ratings.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-i18n.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="l18n">l18n</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="Page Layouts">Page Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="layout-collapsed-menu.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-full.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Layout Full">Layout Full</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-without-menu.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Without Menu">Without Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-empty.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Layout Empty">Layout Empty</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-blank.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Layout Blank">Layout Blank</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span><i data-feather="more-horizontal"></i>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="copy"></i><span class="menu-title text-truncate" data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="form-input.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Input">Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-groups.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-mask.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Input Mask">Input Mask</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-textarea.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-checkbox.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-radio.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-custom-options.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Custom Options">Custom Options</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-switch.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-select.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Select">Select</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-number-input.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-file-uploader.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="File Uploader">File Uploader</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-quill-editor.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Quill Editor">Quill Editor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-date-time-picker.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="form-layout.html"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Form Layout">Form Layout</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="form-wizard.html"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="Form Wizard">Form Wizard</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="form-validation.html"><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Form Validation</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="form-repeater.html"><i data-feather="rotate-cw"></i><span class="menu-title text-truncate" data-i18n="Form Repeater">Form Repeater</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="table-bootstrap.html"><i data-feather="server"></i><span class="menu-title text-truncate" data-i18n="Table">Table</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Datatable">Datatable</span></a>
                    <ul class="menu-content">
                        <li class="active"><a class="d-flex align-items-center" href="table-datatable-basic.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="table-datatable-advanced.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Advanced">Advanced</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" navigation-header"><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span><i data-feather="more-horizontal"></i>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="pie-chart"></i><span class="menu-title text-truncate" data-i18n="Charts">Charts</span><span class="badge badge-light-danger rounded-pill ms-auto me-2">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="chart-apex.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="chart-chartjs.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="maps-leaflet.html"><i data-feather="map"></i><span class="menu-title text-truncate" data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                </li> -->
                <!-- <li class=" navigation-header"><span data-i18n="Misc">Misc</span><i data-feather="more-horizontal"></i>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span class="menu-title text-truncate" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.1</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.2</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Third Level">Third Level 3.1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Third Level">Third Level 3.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="disabled nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="eye-off"></i><span class="menu-title text-truncate" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Documentation</span></a>
                </li> -->
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.ticksy.com/" target="_blank"><i data-feather="life-buoy"></i><span class="menu-title text-truncate" data-i18n="Raise Support">Raise Support</span></a>
                </li> -->
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Customer Data</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/customer_data_tsel">Data Customer</a>
                                    </li>
                                    <li class="breadcrumb-item active">TSEL
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Multilingual -->
                <section id="multilingual-datatable">
                    
                    <div class="row" id="table-head">
                        <div class="col-12" >
                            <div class="card">
                                <div class="col">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title col-8">Customer Data WAN</h4>
                                    </div>
                                </div>

                                <!-- Responsive tables start -->
                                    <div class="card-datatable" style="margin:10px; width:auto; height:auto;">
                                        <table id="table_datin" class="table table-striped m-0">
                                            <thead class="table-dark">
                                                <tr style="text-align:center">
                                                    <th style="max-width:10px;">#</th>
                                                    <th>Site ID</th>
                                                    <th>Site Name</th>
                                                    <th>Link</th>
                                                    <th>Segment</th>
                                                    <th>STO</th>
                                                    <th>Customer Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($list_data_telkomsel as $data_all_customer)
                                                    <tr style="text-align:center">
                                                        <td style="max-width:10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $loop->iteration }}</td>
                                                        <td style="max-width:30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->site_id }}</td>
                                                        <td style="max-width:115px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->site_name }}</td>
                                                        @if($data_all_customer->link === 'gpon' OR $data_all_customer->link === 'GPON' OR $data_all_customer->link === 'Gpon' )
                                                            <td><span class="badge badge-light-primary">{{ $data_all_customer->link }}</span></td>
                                                        @elseif($data_all_customer->link === 'direct metro' OR $data_all_customer->link === 'DIRECT METRO' OR $data_all_customer->link === 'Direct Metro' )
                                                            <td><span class="badge badge-light-success">{{ $data_all_customer->link }}</span></td>
                                                        @else
                                                            <td><span class="badge badge-pill badge-danger">{{ $data_all_customer->link }}</span></td>
                                                        @endif
                                                        <td style="max-width:10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->segment }}</td>
                                                        <td style="max-width:120px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->workzone }}</td>
                                                        <td style="max-width:140px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->customer_name }}</td>
                                                        <td class="text-nowrap">
                                                            <div class="col-12">
                                                                <a href="#" data-toggle="modal" data-bs-toggle="tooltip" data-target="#viewModal<?php echo $data_all_customer->id; ?>" title="View">
                                                                    <button type="button" class="btn btn-icon btn-primary btn-sm" data-editid="{{$data_all_customer->id}}" style="margin:0px;" data-bs-placement="bottom">
                                                                        <i data-feather="eye"></i>
                                                                    </button>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-bs-toggle="tooltip" data-target="#editModal<?php echo $data_all_customer->id; ?>" title="Edit">
                                                                    <button type="button" class="btn btn-icon btn-success btn-sm" data-editid="{{$data_all_customer->id}}" style="margin:0px;" data-bs-placement="bottom">
                                                                        <i data-feather="edit"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </td>  
                                                    </tr>

                                                <!-- View screen modal -->
                                                <div class="modal fade" id="viewModal<?php echo $data_all_customer->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-outline-primary">
                                                                <h4 class="modal-title"><b>Data Customer</b></h4>
                                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                    <div class="modal-body">
                                                                        <form method="get" role="form">
                                                                            {{ csrf_field() }}
                                                                            <input type="hidden" name="id" value="{{ $data_all_customer->id }}"> 
                                                                            <div class="box-body">
                                                                                <ul class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                                                    <li class="nav-item" class="active">
                                                                                        <a class="nav-item nav-link active" href="#order<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="order">Data Site</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" href="#customer<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="customer">Data Teknis</a>
                                                                                    </li>
                                                                                </ul>

                                                                                        <!-- Tab Site -->
                                                                                        <div class="tab-content">
                                                                                            <div role="tabpanel" class="tab-pane fade show active" id="order<?php echo $data_all_customer->id; ?>">
                                                                                                <div class="user-avatar-section">
                                                                                                    <div class="d-flex align-items-center flex-column">
                                                                                                        <div class="user-info text-center">
                                                                                                            <h2>{{ $data_all_customer->site_id }}</h2>
                                                                                                            <span class="badge bg-light-secondary mb-2">{{ $data_all_customer->site_name }}</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h4 class="fw-bolder border-bottom pb-50 mb-2">Details</h4>
                                                                                                <div class="info-container">
                                                                                                    <ul class="list-unstyled">
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Customer Name : </span>
                                                                                                            <span>{{ $data_all_customer->customer_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Site ID : </span>
                                                                                                            <span>{{ $data_all_customer->site_id }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Site Name : </span>
                                                                                                            <span>{{ $data_all_customer->site_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">FO Link : </span>
                                                                                                            <span>{{ $data_all_customer->link }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">STO : </span>
                                                                                                            <span>{{ $data_all_customer->workzone }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Bandwidth (Mbps) : </span>
                                                                                                            <span>{{ $data_all_customer->bandwidth }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Alamat : </span>
                                                                                                            <span>{{ $data_all_customer->alamat }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Customer Tagging : </span>
                                                                                                            <span>{{ $data_all_customer->customer_tagging }}</span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                                            <!-- Tab Customer -->
                                                                                            <div role="tabpanel" class="tab-pane fade" id="customer<?php echo $data_all_customer->id; ?>">       
                                                                                                <div class="user-avatar-section">
                                                                                                    <div class="d-flex align-items-center flex-column">
                                                                                                        <div class="user-info text-center">
                                                                                                            <h2>{{ $data_all_customer->site_id }}</h2>
                                                                                                            <span class="badge bg-light-secondary mb-2">{{ $data_all_customer->site_name }}</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h4 class="fw-bolder border-bottom pb-50 mb-2">Details</h4>
                                                                                                <div class="info-container">
                                                                                                    <ul class="list-unstyled">
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">GPON : </span>
                                                                                                            <span>{{ $data_all_customer->olt_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">IP OLT : </span>
                                                                                                            <span>{{ $data_all_customer->olt_ip }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Port OLT : </span>
                                                                                                            <span>{{ $data_all_customer->olt_port }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Metro : </span>
                                                                                                            <span>{{ $data_all_customer->metro_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">IP Metro : </span>
                                                                                                            <span>{{ $data_all_customer->metro_ip }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Port Metro : </span>
                                                                                                            <span>{{ $data_all_customer->metro_port }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">VLAN : </span>
                                                                                                            <span>{{ $data_all_customer->vlan }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">SN ONT : </span>
                                                                                                            <span>{{ $data_all_customer->sn }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">ODC : </span>
                                                                                                            <span>{{ $data_all_customer->odc_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">ODC Tagging : </span>
                                                                                                            <span>{{ $data_all_customer->odc_tagging }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">ODP : </span>
                                                                                                            <span>{{ $data_all_customer->odp_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">ODP Tagging : </span>
                                                                                                            <span>{{ $data_all_customer->odp_tagging }}</span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- <div class="modal-footer">
                                                                                <button class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                            </div> -->
                                                                            </form>
                                                                        </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- View screen modal -->

                                                <!-- Edit screen modal -->
                                                <div class="modal fade" id="editModal<?php echo $data_all_customer->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            
                                                        <div class="modal-header bg-outline-primary">
                                                            <h4 class="modal-title"><b>Edit Data Customer {{ $data_all_customer->site_id }} {{ $data_all_customer->site_name }}</b></h4>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form id="edit_form<?php echo $data_all_customer->id; ?>" action="/update_data_customer_wan" method="post" class="form">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                                <input type="hidden" name="id" value="{{ $data_all_customer->id }}"> 
                                                                <div class="box-body">
                                                                    <ul class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                                        <li class="nav-item" class="active">
                                                                            <a class="nav-item nav-link active" href="#tab1<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="tab1">Site</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tab2<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="tab2">Customer</a>
                                                                        </li>
                                                                    </ul>

                                                                    <!-- Tab Site -->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane fade show active" id="tab1<?php echo $data_all_customer->id; ?>">
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">Customer Name</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->customer_name}}" aria-label="readonly input example" name="customer_name">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">Site ID</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->site_id}}" aria-label="readonly input example" name="site_id">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">Site Name</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->site_name}}" aria-label="readonly input example" name="site_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-0">
                                                                                        <b><label  for="link">Link</label></b>
                                                                                        
                                                                                    <select class="form-select" id="link" name="link" value="{{ $data_all_customer->link }}" name="link" >   
                                                                                        <option value="">Pilih FO Link</option>    
                                                                                        <option value="GPON"{{$data_all_customer->link == "GPON" ? 'selected' : ''}}>GPON</option>                                                  
                                                                                        <option value="DIRECT METRO"{{$data_all_customer->link == "DIRECT METRO" ? 'selected' : ''}}>DIRECT METRO</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-0">
                                                                                    <b><label for="workzone">STO</label></b>
                                                                                    <select class="form-select" id="workzone" name="workzone" required>        
                                                                                        <option value="">Pilih STO</option>                                      
                                                                                        <option value="MYR"{{$data_all_customer->workzone == "MYR" ? 'selected' : ''}}>Manyar (MYR)</option>                                                  
                                                                                        <option value="TPO"{{$data_all_customer->workzone == "TPO" ? 'selected' : ''}}>Tropodo (TPO)</option>                                                  
                                                                                        <option value="RKT"{{$data_all_customer->workzone == "RKT" ? 'selected' : ''}}>Rungkut (RKT)</option>                                                  
                                                                                        <option value="WRU"{{$data_all_customer->workzone == "WRU" ? 'selected' : ''}}>Waru (WRU)</option>                                                  
                                                                                        <option value="JGR"{{$data_all_customer->workzone == "JGR" ? 'selected' : ''}}>Jagir (JGR)</option>                                                  
                                                                                        <option value="DMO"{{$data_all_customer->workzone == "DMO" ? 'selected' : ''}}>Darmo (DMO)</option>                                                  
                                                                                        <option value="IJK"{{$data_all_customer->workzone == "IJK" ? 'selected' : ''}}>Injoko (IJK)</option>                                                  
                                                                                        <option value="GBG"{{$data_all_customer->workzone == "GBG" ? 'selected' : ''}}>Gubeng (GBG)</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Bandwidth (Mbps)</label></b>
                                                                                <input class="form-control bg-white" type="number" value="{{ $data_all_customer->bandwidth }}" aria-label="readonly input example" name="bandwidth">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Alamat</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->alamat }}" aria-label="readonly input example" name="alamat">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Customer Tagging</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->customer_tagging }}" aria-label="readonly input example" name="customer_tagging">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <!-- Tab Customer -->
                                                                        <div role="tabpanel" class="tab-pane fade" id="tab2<?php echo $data_all_customer->id; ?>">       
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">GPON</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->olt_name }}" aria-label="readonly input example" name="olt_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">IP GPON</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->olt_ip }}" aria-label="readonly input example" name="olt_ip">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Port OLT</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->olt_port }}" aria-label="readonly input example" name="olt_port">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Metro</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->metro_name }}" aria-label="readonly input example" name="metro_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">IP Metro</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->metro_ip }}" aria-label="readonly input example" name="metro_ip">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Port Metro</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->metro_port }}" aria-label="readonly input example" name="metro_port">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">VLAN</label></b>
                                                                                <input class="form-control bg-white" type="number" value="{{ $data_all_customer->vlan }}" aria-label="readonly input example" name="vlan">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">SN ONT</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->sn }}" aria-label="readonly input example" name="sn">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">ODC</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->odc_name }}" aria-label="readonly input example" name="odc_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">ODC Tagging</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->odc_tagging }}" aria-label="readonly input example" name="odc_tagging">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">ODP</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->odp_name }}" aria-label="readonly input example" name="odp_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">ODP Tagging</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->odp_tagging }}" aria-label="readonly input example" name="odp_tagging">
                                                                            </div>
                                                                            <div class="d-flex justify-content-between mt-3 mb-3">
                                                                                <button class="btn btn-success btn-submit">
                                                                                    <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                                                                    <i data-feather="check" class="align-middle ms-sm-25 ms-0"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Edit screen modal -->
                                            @endforeach 
                                            </tbody>
                                            <tfoot class="table-dark">
                                                <tr style="text-align:center">
                                                    <th style="max-width:10px;">#</th>
                                                    <th>Site ID</th>
                                                    <th>Site Name</th>
                                                    <th>Link</th>
                                                    <th>Segment</th>
                                                    <th>STO</th>
                                                    <th>Customer Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                <!-- Responsive tables end -->
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Multilingual -->

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

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    
    <script src="../../../app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/modal-add-new-cc.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-pricing.js"></script>
    <script src="../../../app-assets/js/scripts/pages/modal-add-new-address.js"></script>
    <script src="../../../app-assets/js/scripts/pages/modal-create-app.js"></script>
    <script src="../../../app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
    <script src="../../../app-assets/js/scripts/pages/modal-edit-user.js"></script>

    <script src="../../../app-assets/js/scripts/pages/modal-share-project.js"></script>
    
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>

    <script src="../../../app-assets/js/scripts/forms/form-validation.js"></script>
    <script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
    <script src="../../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END: Page JS-->

    </script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

        $(document).ready(function() {
            $('#table_datin').DataTable();
        } );

        $('#table_datin').dataTable( {
            "drawCallback": function( settings ) {
                feather.replace();
            }
        } );

        $('#table_datin').on("click", ".button delete-confirm", function() {
            var href = $(this).attr('href');
            $( ".modal-body" ).load( href );
            $('#myModal').modal('show') //<-- you should use show in this situation
        });

    </script>

    <!--Modal Delete-->
    <script type="text/javascript">
        $('.delete-confirm').find("#DeleteBtnID").on('click', function (event) {
            alert('Test');
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

    <!--Modal Delete-->
    <script type="text/javascript">   
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id = button.data('id') 
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
    </script>

    <!--Modal Next Previous-->
    <script type="text/javascript">   
        jQuery('#ntxbtn').click(function(e){
            e.preventDefault();
            var next_tab = jQuery('.nav-tabs > .active').next('li').find('a');
            jQuery('#prevbtn').show();
            if(next_tab.length>0){
            next_tab.trigger('click');
            }else if(next_tab.length>0){
            jQuery('#ntxbtn').hide();
            }
        });
        jQuery('#prevbtn').click(function(e){
            e.preventDefault();
            var next_tab = jQuery('.nav-tabs > .active').prev('li').find('a');
            if(next_tab.length>0){
            next_tab.trigger('click');
            }else {
            jQuery('#prevbtn').hide();
            }
        });
    </script>

	</style>
    </body>
<!-- END: Body-->

</html>