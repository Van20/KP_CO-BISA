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
    <title>Edit Order Datin</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
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

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->


    <!-- NEW CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <!-- NEW CSS-->
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
                <li class=" nav-item"><a class="d-flex align-items-center" href="{!! url('/dashboard_admin'); !!}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i data-feather="grid"></i><span class="menu-item text-truncate" data-i18n="Kanban">Order Datin</span></a>
                <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{!! url('/list_order'); !!}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">List Order</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{!! url('/customer_data'); !!}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Customer Data</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Technician</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{!! url('/performansi_teknisi'); !!}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Performance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{!! url('/detail_teknisi'); !!}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Technician Data</span></a>
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Form Wizard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Wizard
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

                <!-- Vertical Wizard -->
                <section class="vertical-wizard">
                    <div class="bs-stepper vertical vertical-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-vertical" role="tab" id="account-details-vertical-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">1</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Data Order</span>
                                        <span class="bs-stepper-subtitle">Setup Data Order</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical" role="tab" id="personal-info-vertical-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">2</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Data Customer</span>
                                        <span class="bs-stepper-subtitle">Add Data Customer</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical" role="tab" id="address-step-vertical-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Datek Logic</span>
                                        <span class="bs-stepper-subtitle">Add Datek Logic</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#social-links-vertical" role="tab" id="social-links-vertical-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">4</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Datek Fisik</span>
                                        <span class="bs-stepper-subtitle">Add Datek Logic</span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        @foreach($datin_ccan as $order_datin_edit)
                        <form class="bs-stepper-content" action="/update_order" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $order_datin_edit->id }}"> 
                            <div class="bs-stepper-content">
                                <div id="account-details-vertical" class="content" role="tabpanel" aria-labelledby="account-details-vertical-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Data Order Details</h5>
                                        <small class="text-muted">Enter Your Data Order Details.</small>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="no_order">No. Order</label>
                                            <input type="text" id="no_order" class="form-control" placeholder="1-21493520980" value="{{ $order_datin_edit->no_order }}" required name="no_order"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <div class="mb-1 position-relative">
                                                <label class="form-label" for="tgl_order">Tgl Order</label>
                                                <input type="text" class="form-control pickadate-short-string" name="tgl_order" id="tgl_order" placeholder="2020-11-27" value="{{ $order_datin_edit->tgl_order }}"required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="order_type">Order Type</label>
                                            <input type="text" id="order_type" class="form-control" placeholder="ASTINET" value="{{ $order_datin_edit->order_type }}" required name="order_type"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <div class="mb-0">
                                                    <label class="form-label" for="segment">Segment</label>
                                                    <select class="hide-search form-select" id="segment" name="segment" value="{{ $order_datin_edit->segment }}" name="segment" >
                                                    <optgroup label="Pilih Segment">                                                        
                                                    <option value="DES">DES</option>
                                                    <option value="DGS">DGS</option>
                                                    <option value="DBS">DBS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="bandwidth">Bandwidth (M)</label>
                                            <input type="number" id="bandwidth" class="form-control" placeholder="2, 5, 10.." value="{{ $order_datin_edit->bandwidth }}" required name="bandwidth"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <div class="mb-0">
                                                <label class="form-label" for="sto_name">STO</label>
                                                <select class="select2 w-100" id="sto_name" name="sto_name" required>                                                  
                                                    <option value="MYR"{{$order_datin_edit->sto_name == "MYR" ? 'selected' : ''}}>Manyar (MYR)</option>                                                  
                                                    <option value="TPO"{{$order_datin_edit->sto_name == "TPO" ? 'selected' : ''}}>Tropodo (TPO)</option>                                                  
                                                    <option value="RKT"{{$order_datin_edit->sto_name == "RKT" ? 'selected' : ''}}>Rungkut (RKT)</option>                                                  
                                                    <option value="WRU"{{$order_datin_edit->sto_name == "WRU" ? 'selected' : ''}}>Waru (WRU)</option>                                                  
                                                    <option value="JGR"{{$order_datin_edit->sto_name == "JGR" ? 'selected' : ''}}>Jagir (JGR)</option>                                                  
                                                    <option value="DMO"{{$order_datin_edit->sto_name == "DMO" ? 'selected' : ''}}>Darmo (DMO))</option>                                                  
                                                    <option value="IJK"{{$order_datin_edit->sto_name == "IJK" ? 'selected' : ''}}>Injoko (IJK)</option>                                                  
                                                    <option value="GBG)"{{$order_datin_edit->sto_name == "GBG" ? 'selected' : ''}}>Gubeng (GBG)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <div class="mb-1    ">
                                                    <label class="form-label" for="status_order">Status Order</label>
                                                    <select class="hide-search form-select" id="status_order" name="status_order" value="{{ $order_datin_edit->status_order }}" required name="status_order">
                                                        <optgroup label="Pilih Status Order">                                                     
                                                        <option value="OA">On Air (OA)</option>
                                                        <option value="OGP">On Progress (OGP)</option>
                                                        <option value="FA">Fallout (FA)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="deskripsi_order">Deskripsi Order (Optional)</label>
                                            <textarea class="form-control" id="deskripsi_order" rows="2" placeholder="Tambahkan Deskripsi pada Order (Optional)" required name="deskripsi_order">{{ $order_datin_edit->deskripsi_order }}</textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-outline-secondary btn-prev" disabled>
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </a>
                                        <a class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="personal-info-vertical" class="content" role="tabpanel" aria-labelledby="personal-info-vertical-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Data Customer Details</h5>
                                        <small class="text-muted">Enter Your Data Customer Details.</small>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="customer_name">Nama Pelanggan</label>
                                            <input type="text" id="customer_name" class="form-control" placeholder="Rizvan Ariyanto" value="{{ $order_datin_edit->customer_name }}" required name="customer_name"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="alamat">Alamat</label>
                                            <input type="text" id="alamat" class="form-control" placeholder="Jl. Ketintang Barat, Surabaya" value="{{ $order_datin_edit->alamat }}" required name="alamat"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="customer_tagging">Tagging Pelanggan</label>
                                            <input type="text" id="customer_tagging" class="form-control" placeholder="-7.3382, 112.7648" value="{{ $order_datin_edit->customer_tagging }}" required name="customer_tagging"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="pic">No.Telp</label>
                                            <input type="number" id="pic" class="form-control" placeholder="08xx-xxxx-xxxx" value="{{ $order_datin_edit->pic }}" required name="pic"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="qr_code">QR Code</label>
                                            <input type="text" id="qr_code" class="form-control" placeholder="JD02238410SX2" value="{{ $order_datin_edit->qr_code }}" required name="qr_code"/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </a>
                                        <a class="btn btn-primary btn-next" type="submit">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="address-step-vertical" class="content" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Datek Logic</h5>
                                        <small>Enter Your Datek Logic.</small>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="olt_name">OLT Name</label>
                                            <input type="text" id="olt_name" class="form-control" placeholder="GPON00-D5-WRU-3" value="{{ $order_datin_edit->olt_name }}" required name="olt_name"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="olt_port">OLT Port</label>
                                            <input type="text" id="olt_port" class="form-control" placeholder="0/1/4 ont 100" value="{{ $order_datin_edit->olt_port }}" required name="olt_port"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="olt_ip">OLT IP</label>
                                            <input type="text" id="olt_ip" class="form-control" placeholder="172.16.10.22" value="{{ $order_datin_edit->olt_ip }}" required name="olt_ip"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="metro_name">METRO Name</label>
                                            <input type="text" id="metro_name" class="form-control" placeholder="ME-D5-WR" value="{{ $order_datin_edit->metro_name }}" required name="metro_name"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="metro_ip">METRO IP</label>
                                            <input type="text" id="metro_ip" class="form-control" placeholder="172.16.22.110" value="{{ $order_datin_edit->metro_ip }}" required name="metro_ip"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="metro_port">METRO Port</label>
                                            <input type="text" id="metro_port" class="form-control" placeholder="Eth-Trunk53" value="{{ $order_datin_edit->metro_port }}" required name="metro_port"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="sn">SN ONT</label>
                                            <input type="text" id="sn" class="form-control" placeholder="ZTEGCC577F65" value="{{ $order_datin_edit->sn }}" required name="sn"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="vlan">VLAN</label>
                                            <input type="text" id="vlan" class="form-control" placeholder="2782" value="{{ $order_datin_edit->vlan }}" required name="vlan"/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </a>
                                        <a class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="social-links-vertical" class="content" role="tabpanel" aria-labelledby="social-links-vertical-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Datek Fisik</h5>
                                        <small>Enter Your Datek Fisik.</small>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="odc_name">ODC Name</label>
                                            <input type="text" id="odc_name" class="form-control" placeholder="ODC-WR1-FBJ" value="{{ $order_datin_edit->odc_name }}" required name="odc_name"/>
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="odp_name">ODP Name</label>
                                            <input type="text" id="odp_name" class="form-control" placeholder="ODP-WR1-FBJ/04" value="{{ $order_datin_edit->odp_name }}" required name="odp_name"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="odp_tagging">ODP Tagging</label>
                                            <input type="text" id="odp_tagging" class="form-control" placeholder="-7.2443, 112.34345" value="{{ $order_datin_edit->odp_tagging }}" required name="odp_tagging"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="redaman">Redaman</label>
                                            <input type="text" id="redaman" class="form-control" placeholder="-17 dBm" value="{{ $order_datin_edit->redaman }}" required name="redaman"/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </a>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </section>
                <!-- /Vertical Wizard -->

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
    <script src="../../../app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/form-wizard.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
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