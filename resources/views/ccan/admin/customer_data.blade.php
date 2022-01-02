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
    <title>Customer Data Datin</title>
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
                <li class=" nav-item"><a class="d-flex align-items-center" href="/dashboard_admin"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/list_order"><i data-feather="grid"></i><span class="menu-item text-truncate" data-i18n="Kanban">Order Datin</span></a>
                <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/list_order"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">List Order</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/customer_data"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Customer Data</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/performansi_teknisi"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Technician</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/performansi_teknisi"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Performance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/detail_teknisi"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Technician Data</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{!! url('/jadwal_teknisi'); !!}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Schedule</span></a>
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
                            <h2 class="content-header-title float-start mb-0">Customer Data</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/detail_teknisi">Order Datin</a>
                                    </li>
                                    <li class="breadcrumb-item active">Customer Data
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
                                        <h4 class="card-title col-8">CCAN Customer Data</h4>
                                    </div>
                                </div>
                                    <div class="card-datatable" style="margin:10px; width:auto; height:auto;">
                                        <table id="table_datin" class="table table-striped m-0">
                                            <thead class="table-dark">
                                                <tr style="text-align:center">
                                                    <th style="max-width:10px;">#</th>
                                                    <th>Nomor Order</th>
                                                    <th>Tgl Order</th>
                                                    <th>Segment</th>
                                                    <th>Customer Name</th>
                                                    <th>Status Order</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data_customer as $data_all_customer)
                                                    <tr style="text-align:center">
                                                        <td style="max-width:10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $loop->iteration }}</td>
                                                        <td style="max-width:30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->no_order }}</td>
                                                        <td style="max-width:115px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->tgl_order }}</td>
                                                        <td style="max-width:20px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->segment }}</td>
                                                        <td style="max-width:120px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->customer_name }}</td>
                                                        <td style="max-width:30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_customer->status_order }}</td>
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
                                                                                        <a class="nav-item nav-link active" href="#order<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="order">Data Order</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" href="#customer<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="customer">Data Teknis</a>
                                                                                    </li>
                                                                                </ul>

                                                                                        <!-- Tab Order -->
                                                                                        <div class="tab-content">
                                                                                            <div role="tabpanel" class="tab-pane fade show active" id="order<?php echo $data_all_customer->id; ?>">
                                                                                                <div class="user-avatar-section">
                                                                                                    <div class="d-flex align-items-center flex-column">
                                                                                                        <div class="user-info text-center">
                                                                                                            <h2>{{ $data_all_customer->no_order }}</h2>
                                                                                                            <span class="badge bg-light-secondary mb-2">{{ $data_all_customer->segment }}</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h4 class="fw-bolder border-bottom pb-50 mb-2">Details</h4>
                                                                                                <div class="info-container">
                                                                                                    <ul class="list-unstyled">
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">No. Order : </span>
                                                                                                            <span>{{ $data_all_customer->no_order }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Tgl. Order : </span>
                                                                                                            <span>{{ $data_all_customer->tgl_order }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Segment : </span>
                                                                                                            <span>{{ $data_all_customer->segment }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Order Type : </span>
                                                                                                            <span>{{ $data_all_customer->order_type }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Product Name : </span>
                                                                                                            <span>{{ $data_all_customer->product_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Bandwidth : </span>
                                                                                                            <span>{{ $data_all_customer->bandwidth }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Customer Name : </span>
                                                                                                            <span>{{ $data_all_customer->customer_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Alamat : </span>
                                                                                                            <span>{{ $data_all_customer->alamat }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">STO : </span>
                                                                                                            <span>{{ $data_all_customer->sto_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">PIC : </span>
                                                                                                            <span>{{ $data_all_customer->pic }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Tgl Selesai : </span>
                                                                                                            <span>{{ $data_all_customer->pic }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Teknisi : </span>
                                                                                                            <span>{{ $data_all_customer->teknisi_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Status Order :</span>
                                                                                                            <span class="badge bg-light-danger">{{ $data_all_customer->status_order }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Note : </span>
                                                                                                            <span>{{ $data_all_customer->deskripsi_order }}</span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                                            <!-- Tab Customer -->
                                                                                            <div role="tabpanel" class="tab-pane fade" id="customer<?php echo $data_all_customer->id; ?>">       
                                                                                                <div class="user-avatar-section">
                                                                                                    <div class="d-flex align-items-center flex-column">
                                                                                                        <div class="user-info text-center">
                                                                                                            <h2>{{ $data_all_customer->no_order }}</h2>
                                                                                                            <span class="badge bg-light-secondary mb-2">{{ $data_all_customer->segment }}</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h4 class="fw-bolder border-bottom pb-50 mb-2">Details</h4>
                                                                                                <div class="info-container">
                                                                                                    <ul class="list-unstyled">
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">Serial Number : </span>
                                                                                                            <span>{{ $data_all_customer->sn }}</span>
                                                                                                        </li>
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
                                                                                                            <span class="fw-bolder me-25">ODC : </span>
                                                                                                            <span>{{ $data_all_customer->odc_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">ODP : </span>
                                                                                                            <span>{{ $data_all_customer->odp_name }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">ODP Tagging : </span>
                                                                                                            <span>{{ $data_all_customer->odp_tagging }}</span>
                                                                                                        </li>
                                                                                                        <li class="mb-75">
                                                                                                            <span class="fw-bolder me-25">QR Code : </span>
                                                                                                            <span>{{ $data_all_customer->qr_code }}</span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
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
                                                            <h4 class="modal-title"><b>Detail Order {{ $data_all_customer->no_order }} {{ $data_all_customer->customer_name }}</b></h4>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form id="edit_form<?php echo $data_all_customer->id; ?>" action="/update_data_customer" method="post" class="form">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                                <input type="hidden" name="id" value="{{ $data_all_customer->id }}"> 
                                                                <div class="box-body">
                                                                    <ul class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                                        <li class="nav-item" class="active">
                                                                            <a class="nav-item nav-link active" href="#tab1<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="tab1">Order</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="#tab2<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="tab2">Customer</a>
                                                                        </li>
                                                                    </ul>

                                                                    <!-- Tab Order -->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane fade show active" id="tab1<?php echo $data_all_customer->id; ?>">
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">No. Order</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->no_order}}" aria-label="readonly input example" name="no_order">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-1 position-relative">
                                                                                    <b><label for="exampleInputEmail1">Tgl Order</label></b>
                                                                                    <input type="text" class="form-control pickadate-short-string" name="tgl_order" id="tgl_order" placeholder="2020-11-27" value="{{ $data_all_customer->tgl_order }}"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-0">
                                                                                        <b><label  for="segment">Segment</label></b>
                                                                                        
                                                                                    <select class="form-select" id="segment" name="segment" value="{{ $data_all_customer->segment }}" name="segment" >   
                                                                                        <option value="">Pilih Segment</option>    
                                                                                        <option value="DBS LBS"{{$data_all_customer->segment == "DBS LBS" ? 'selected' : ''}}>DBS LBS</option>                                                  
                                                                                        <option value="DES MMS"{{$data_all_customer->segment == "DES MMS" ? 'selected' : ''}}>DES MMS</option>                                                  
                                                                                        <option value="DES FBS"{{$data_all_customer->segment == "DES FBS" ? 'selected' : ''}}>DES FBS</option>                                                   
                                                                                        <option value="DES TMS"{{$data_all_customer->segment == "DES TMS" ? 'selected' : ''}}>DES TMS</option>                                                  
                                                                                        <option value="DES EMS"{{$data_all_customer->segment == "DES EMS" ? 'selected' : ''}}>DES EMS</option>                                                  
                                                                                        <option value="DES RDS"{{$data_all_customer->segment == "DES RDS" ? 'selected' : ''}}>DES RDS</option>                                                  
                                                                                        <option value="DGS LGS"{{$data_all_customer->segment == "DGS LGS" ? 'selected' : ''}}>DGS LGS</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Order Type</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->order_type }}" aria-label="readonly input example" name="order_type">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Product Name</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->product_name }}" aria-label="readonly input example" name="product_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Bandwidth</label></b>
                                                                                <input class="form-control bg-white" type="number" value="{{ $data_all_customer->bandwidth }}" aria-label="readonly input example" name="bandwidth">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Customer Name</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->customer_name }}" aria-label="readonly input example" name="customer_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Alamat</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->alamat }}" aria-label="readonly input example" name="alamat">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-0">
                                                                                    <b><label for="sto_name">STO</label></b>
                                                                                    <select class="form-select" id="sto_name" name="sto_name" required>        
                                                                                        <option value="">Pilih STO</option>                                      
                                                                                        <option value="MYR"{{$data_all_customer->sto_name == "MYR" ? 'selected' : ''}}>Manyar (MYR)</option>                                                  
                                                                                        <option value="TPO"{{$data_all_customer->sto_name == "TPO" ? 'selected' : ''}}>Tropodo (TPO)</option>                                                  
                                                                                        <option value="RKT"{{$data_all_customer->sto_name == "RKT" ? 'selected' : ''}}>Rungkut (RKT)</option>                                                  
                                                                                        <option value="WRU"{{$data_all_customer->sto_name == "WRU" ? 'selected' : ''}}>Waru (WRU)</option>                                                  
                                                                                        <option value="JGR"{{$data_all_customer->sto_name == "JGR" ? 'selected' : ''}}>Jagir (JGR)</option>                                                  
                                                                                        <option value="DMO"{{$data_all_customer->sto_name == "DMO" ? 'selected' : ''}}>Darmo (DMO)</option>                                                  
                                                                                        <option value="IJK"{{$data_all_customer->sto_name == "IJK" ? 'selected' : ''}}>Injoko (IJK)</option>                                                  
                                                                                        <option value="GBG"{{$data_all_customer->sto_name == "GBG" ? 'selected' : ''}}>Gubeng (GBG)</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">PIC</label></b>
                                                                                <input class="form-control bg-white" type="number" value="{{ $data_all_customer->pic }}" aria-label="readonly input example" name="pic">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-1 position-relative">
                                                                                    <b><label for="exampleInputEmail1">Tgl Order</label></b>
                                                                                    <input type="text" class="form-control pickadate-short-string" name="tgl_order" id="tgl_order" placeholder="2020-11-27" value="{{ $data_all_customer->tgl_order }}"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-1">
                                                                                    <b><label for="nik">Teknisi Assign</label></b>
                                                                                    <select class="form-select" id="nik" name="nik" required>     
                                                                                        <option value="">Pilih Teknisi</option>          
                                                                                        <option value="18940656"{{$data_all_customer->nik == "18940656" ? 'selected' : ''}}>Miftachul Chusnul Manaf</option>
                                                                                        <option value="18950266"{{$data_all_customer->nik == "18950266" ? 'selected' : ''}}>M Nur Mubarok</option> 
                                                                                        <option value="18960662"{{$data_all_customer->nik == "18960662" ? 'selected' : ''}}>Mochammad Jefri</option>  
                                                                                        <option value="18980405"{{$data_all_customer->nik == "18980405" ? 'selected' : ''}}>Yudivan Ilham Santoso</option> 
                                                                                        <option value="18990256"{{$data_all_customer->nik == "18990256" ? 'selected' : ''}}>Husni Dwi Dhuhawan Al Mubarok</option> 
                                                                                        <option value="18990339"{{$data_all_customer->nik == "18990339" ? 'selected' : ''}}>Muchamad Aris Setiawan</option> 
                                                                                        <option value="19890021"{{$data_all_customer->nik == "19890021" ? 'selected' : ''}}>Rycco Permana Saputra</option> 
                                                                                        <option value="19920124"{{$data_all_customer->nik == "19920124" ? 'selected' : ''}}>Dennis Bagus Satria</option> 
                                                                                        <option value="19940226"{{$data_all_customer->nik == "19940226" ? 'selected' : ''}}>Wisnu Hernindya Noviantoro</option>
                                                                                        <option value="19960049"{{$data_all_customer->nik == "19960049" ? 'selected' : ''}}>Muhammad Novrizal Irsan</option>
                                                                                        <option value="20810003"{{$data_all_customer->nik == "20810003" ? 'selected' : ''}}>Mochamad Hanifan</option>
                                                                                        <option value="20900011"{{$data_all_customer->nik == "20900011" ? 'selected' : ''}}>Fatkhurokhman</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-0">
                                                                                    <b><label for="sto_name">STO</label></b>
                                                                                    <select class="form-select" id="sto_name" name="sto_name" required>     
                                                                                        <option value="">Pilih STO</option>                                           
                                                                                        <option value="MYR"{{$data_all_customer->sto_name == "MYR" ? 'selected' : ''}}>Manyar (MYR)</option>                                                  
                                                                                        <option value="TPO"{{$data_all_customer->sto_name == "TPO" ? 'selected' : ''}}>Tropodo (TPO)</option>                                                  
                                                                                        <option value="RKT"{{$data_all_customer->sto_name == "RKT" ? 'selected' : ''}}>Rungkut (RKT)</option>                                                  
                                                                                        <option value="WRU"{{$data_all_customer->sto_name == "WRU" ? 'selected' : ''}}>Waru (WRU)</option>                                                  
                                                                                        <option value="JGR"{{$data_all_customer->sto_name == "JGR" ? 'selected' : ''}}>Jagir (JGR)</option>                                                  
                                                                                        <option value="DMO"{{$data_all_customer->sto_name == "DMO" ? 'selected' : ''}}>Darmo (DMO)</option>                                                  
                                                                                        <option value="IJK"{{$data_all_customer->sto_name == "IJK" ? 'selected' : ''}}>Injoko (IJK)</option>                                                  
                                                                                        <option value="GBG"{{$data_all_customer->sto_name == "GBG" ? 'selected' : ''}}>Gubeng (GBG)</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="status_order">Status Order</label></b>
                                                                                <div class="mb-0">
                                                                                    <select class="form-select" id="status_order" name="status_order" required>     
                                                                                        <option value="">Pilih STATUS ORDER</option> 
                                                                                        <option value="BUTUH JT"{{$data_all_customer->status_order == "BUTUH JT" ? 'selected' : ''}}>BUTUH JT</option>                                                 
                                                                                        <option value="CLOSE"{{$data_all_customer->status_order == "CLOSE" ? 'selected' : ''}}>CLOSE</option>                                               
                                                                                        <option value="CANCEL"{{$data_all_customer->status_order == "CANCEL" ? 'selected' : ''}}>CANCEL</option>                                                 
                                                                                        <option value="PENDING"{{$data_all_customer->status_order == "PENDING" ? 'selected' : ''}}>PENDING</option>                                               
                                                                                        <option value="REPAIR ALPRO"{{$data_all_customer->status_order == "REPAIR ALPRO" ? 'selected' : ''}}>REPAIR ALPRO</option>                                                   
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex justify-content-between mt-3 mb-3">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <!-- Tab Customer -->
                                                                        <div role="tabpanel" class="tab-pane fade" id="tab2<?php echo $data_all_customer->id; ?>">       
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">Serial Number</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->sn }}" aria-label="readonly input example" name="sn">
                                                                            </div>
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
                                                                                <b><label for="exampleInputEmail1">ODC</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->odc_name }}" aria-label="readonly input example" name="odc_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">ODP</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->odp_name }}" aria-label="readonly input example" name="odp_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">ODP Tagging</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->odp_tagging }}" aria-label="readonly input example" name="odp_tagging">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">QR COde</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_customer->qr_code }}" aria-label="readonly input example" name="qr_code">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Note</label></b>
                                                                                <textarea class="form-control" id="deskripsi_order" rows="2" placeholder="Tambahkan Note pada Order"  name="deskripsi_order">{{ $data_all_customer->deskripsi_order }}</textarea>
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
                                                    <th>Nomor Order</th>
                                                    <th>Tgl Order</th>
                                                    <th>Segment</th>
                                                    <th>Customer Name</th>
                                                    <th>Status Order</th>
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

    <!-- View screen modal -->
    <div class="modal fade" id="viewModalReject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-outline-primary">
                        <h4 class="modal-title"><b>Data Customer</b></h4>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/update_order" method="post" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data_all_customer->id }}"> 
                        <div class="box-body">
                            <ul class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <li class="nav-item" class="active">
                                    <a class="nav-item nav-link active" href="#order<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="order">Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#customer<?php echo $data_all_customer->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="customer">Customer</a>
                                </li>
                            </ul>
                                </div>
                            </div>
                        <!-- <div class="modal-footer">
                            <button class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div> -->
                        </form>
                        <form action="" method="get" role="form">
                        {{ csrf_field() }}
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar-section">
                                        <div class="d-flex align-items-center flex-column">
                                            <div class="user-info text-center">
                                                <h2>123456</h2>
                                                <span class="badge bg-light-secondary">DES LBS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- View screen modal -->


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