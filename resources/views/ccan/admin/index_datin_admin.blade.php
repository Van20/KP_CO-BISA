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
    <title>List Order Datin</title>
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
                            <h2 class="content-header-title float-start mb-0">Order Datin</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Order Datin</a>
                                    </li>
                                    <li class="breadcrumb-item active">List Order
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
                    
                    <div class="row">
                        <div class="col-12" >
                            <div class="card">
                                <div class="col">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title col-8">Dashboard Order Datin</h4>

                                        <div class="btn-group" role="group" aria-label="Basic example">  
                                                <!--Import Modal -->
                                                <form class="form-inline" role="form" action="/order/import" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="image-upload">
                                                        <label for="file-input">
                                                            <button type="button" display: none; class="btn btn-outline-primary" data-toggle="modal" data-target="#importModal" data-bs-toggle="tooltip" title="Import File Excel">
                                                                <i data-feather="file-text" class="primary"></i>
                                                            </button>&nbsp
                                                        <input id="file-input" type="file" name="imported_file"/>

                                                    </div>
                                                    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Import Order From Excel</h5>
                                                                    <a type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </a>    
                                                                </div>
                                                                <div class="modal-body">
                                                                <label class="btn btn-danger btn-sm" for="my-file-selector">
                                                                    <input id="my-file-selector" name="imported_file" type="file" style="display:none" 
                                                                    onchange="$('#upload-file-info').text(this.files[0].name)">
                                                                    Select File      
                                                                </label>
                                                                <span class='label label-info ml-3' id="upload-file-info">&nbsp &nbsp No File Choosen ..</span>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- /Import Modal -->   

                                                <!-- Export Order -->   
                                                <form class="form-inline" role="form" action="/order/export" method="get" enctype="multipart/form-data">
                                                {{csrf_field()}} 
                                                    <div class="image-upload">
                                                        <button type="submit" display: none; class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Export To Excel">
                                                            <i data-feather="download" class="primary"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <!-- /Export Order -->   

                                                <!-- Add Manual Order -->   
                                                <a href="/add_order_datin">
                                                    <button type="button" class="btn btn-relief-primary btn-gradient-primary ms-1" data-bs-toggle="tooltip" title="Add Manual Order">
                                                        <i data-feather="plus" class="me-25"></i>
                                                        <span>Manual Order</span>
                                                    </button>
                                                </a>
                                                <!-- /Add Manual Order -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card-datatable" style="margin:10px; width:auto; height:auto;">
                                    <table id="table_datin" class="table table-striped m-0">
                                        <thead>
                                            <tr>
                                                <th>No.Order</th>
                                                <th>Tgl Order</th>
                                                <th>Nama Customer</th>
                                                <th>Alamat</th>
                                                <th>STO</th>
                                                <th>Product Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($all_order as $data_all_order)
                                            <tr>
                                                <td style="max-width:50px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_order->no_order }}</td>
                                                <td style="max-width:115px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_order->tgl_order }}</td>
                                                <td style="max-width:100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_order->customer_name }}</td>
                                                <td style="max-width:150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $data_all_order->alamat }}</td>
                                                <td>{{ $data_all_order->sto_name }}</td>
                                                <td>{{ $data_all_order->product_name }}</td>
                                                <td>
                                                    <div class="col-12">
                                                        <a href="#" data-toggle="modal" data-bs-toggle="tooltip" data-target="#editModal<?php echo $data_all_order->id; ?>" title="Edit">
                                                            <button type="button" class="btn btn-icon btn-primary btn-sm" data-editid="{{$data_all_order->id}}" style="margin:0px;" data-bs-placement="bottom">
                                                                <i data-feather="edit"></i>
                                                            </button>
                                                        </a>
                                                        <a href="/delete/order/{{ $data_all_order->id }}" data-toggle="modal" data-target="#deleteModal<?php echo $data_all_order->id; ?>" data-bs-toggle="tooltip" title="Delete">
                                                            <button type="button" class="btn btn-icon btn-danger btn-sm" style="margin:0px;" data-bs-placement="bottom">
                                                                <i data-feather="trash" color="white"></i>
                                                            </button>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-bs-toggle="tooltip" data-target="#assignModal<?php echo $data_all_order->id; ?>" title="Assign">
                                                            <button type="button" class="btn btn-icon btn btn-success btn-sm" style="margin:0px;" data-bs-placement="bottom">
                                                                <i data-feather="send"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Delete Warning Modal -->
                                                <div class="modal fade" id="deleteModal<?php echo $data_all_order->id; ?>" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <b><h5 class="modal-title" id="exampleModalLabel">Delete Selected Order</h5></b>
                                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/delete/order/{{ $data_all_order->id }}" method="get" role="form">
                                                                    {{ csrf_field() }}
                                                                    <input id="id" name="id" type="hidden">
                                                                    
                                                                    <div class="col-12">
                                                                        <br>
                                                                        
                                                                        <h5 class="text-center">Are you sure to delete this Order?</h5>
                                                                        
                                                                    </div>

                                                                    <br>
                                                                    <div class="modal-footer" id="modal-footer">
                                                                    <br>
                                                                    <hr>
                                                                        <button type="submit" class="btn btn-danger btn-sm">Yes, sure</button>
                                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- End Delete Modal --> 
                                        
                                            <!-- Edit screen modal -->
                                                <div class="modal fade" id="editModal<?php echo $data_all_order->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            
                                                        <div class="modal-header bg-outline-primary">
                                                            <h4 class="modal-title"><b>Detail Order {{ $data_all_order->no_order }} {{ $data_all_order->customer_name }}</b></h4>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="/update_order" method="post" role="form">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="id" value="{{ $data_all_order->id }}"> 
                                                            <div class="box-body">
                                                                <ul class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                                    <li class="nav-item" class="active">
                                                                        <a class="nav-item nav-link active" href="#order<?php echo $data_all_order->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="order">Order</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="#customer<?php echo $data_all_order->id; ?>" role="tab" data-toggle="tab" aria-selected="true" aria-controls="customer">Customer</a>
                                                                    </li>
                                                                </ul>

                                                                    <!-- Tab Order -->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane fade show active" id="order<?php echo $data_all_order->id; ?>">
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">No. Order</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->no_order}}" aria-label="readonly input example" name="no_order">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-1 position-relative">
                                                                                    <b><label for="exampleInputEmail1">Tgl Order</label></b>
                                                                                    <input type="text" class="form-control pickadate-short-string" name="tgl_order" id="tgl_order" placeholder="2020-11-27" value="{{ $data_all_order->tgl_order }}"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Order Type</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->order_type }}" aria-label="readonly input example" name="order_type">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-0">
                                                                                    <b><label  for="segment">Segment</label></b>
                                                                                    <select class="form-select" id="segment" name="segment" value="{{ $data_all_order->segment }}" name="segment" >
                                                                                        <option value="DBS LBS"{{$data_all_order->segment == "DBS LBS" ? 'selected' : ''}}>DBS LBS</option>                                                  
                                                                                        <option value="DES MMS"{{$data_all_order->segment == "DES MMS" ? 'selected' : ''}}>DES MMS</option>                                                  
                                                                                        <option value="DES FBS"{{$data_all_order->segment == "DES FBS" ? 'selected' : ''}}>DES FBS</option>                                                   
                                                                                        <option value="DES TMS"{{$data_all_order->segment == "DES TMS" ? 'selected' : ''}}>DES TMS</option>                                                  
                                                                                        <option value="DES EMS"{{$data_all_order->segment == "DES EMS" ? 'selected' : ''}}>DES EMS</option>                                                  
                                                                                        <option value="DES RDS"{{$data_all_order->segment == "DES RDS" ? 'selected' : ''}}>DES RDS</option>                                                  
                                                                                        <option value="DGS LGS"{{$data_all_order->segment == "DGS LGS" ? 'selected' : ''}}>DGS LGS</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Bandwidth</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->bandwidth }}" aria-label="readonly input example" name="bandwidth">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <div class="mb-0">
                                                                                    <b><label for="sto_name">STO</label></b>
                                                                                    <select class="form-select" id="sto_name" name="sto_name" required>     
                                                                                        <option value="">Pilih STO</option>                                           
                                                                                        <option value="MYR"{{$data_all_order->sto_name == "MYR" ? 'selected' : ''}}>Manyar (MYR)</option>                                                  
                                                                                        <option value="TPO"{{$data_all_order->sto_name == "TPO" ? 'selected' : ''}}>Tropodo (TPO)</option>                                                  
                                                                                        <option value="RKT"{{$data_all_order->sto_name == "RKT" ? 'selected' : ''}}>Rungkut (RKT)</option>                                                  
                                                                                        <option value="WRU"{{$data_all_order->sto_name == "WRU" ? 'selected' : ''}}>Waru (WRU)</option>                                                  
                                                                                        <option value="JGR"{{$data_all_order->sto_name == "JGR" ? 'selected' : ''}}>Jagir (JGR)</option>                                                  
                                                                                        <option value="DMO"{{$data_all_order->sto_name == "DMO" ? 'selected' : ''}}>Darmo (DMO)</option>                                                  
                                                                                        <option value="IJK"{{$data_all_order->sto_name == "IJK" ? 'selected' : ''}}>Injoko (IJK)</option>                                                  
                                                                                        <option value="GBG"{{$data_all_order->sto_name == "GBG" ? 'selected' : ''}}>Gubeng (GBG)</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Product Name</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->product_name }}" aria-label="readonly input example" name="order_type">
                                                                            </div>
                                                                            <!-- <div class="form-group mt-1">
                                                                                <b><label for="status_order">Status Order</label></b>
                                                                                <div class="mb-0">
                                                                                    <select class="form-select" id="status_order" name="status_order" required>     
                                                                                        <option value="">Pilih STATUS ORDER</option> 
                                                                                        <option value="BUTUH JT"{{$data_all_order->status_order == "BUTUH JT" ? 'selected' : ''}}>BUTUH JT</option>                                                 
                                                                                        <option value="CLOSE"{{$data_all_order->status_order == "CLOSE" ? 'selected' : ''}}>CLOSE</option>                                               
                                                                                        <option value="CANCEL"{{$data_all_order->status_order == "CANCEL" ? 'selected' : ''}}>CANCEL</option>                                                 
                                                                                        <option value="PENDING"{{$data_all_order->status_order == "PENDING" ? 'selected' : ''}}>PENDING</option>                                               
                                                                                        <option value="REPAIR ALPRO"{{$data_all_order->status_order == "REPAIR ALPRO" ? 'selected' : ''}}>REPAIR ALPRO</option>                                                   
                                                                                    </select>
                                                                                </div>
                                                                            </div> -->
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Deskripsi Order (Optional)</label></b>
                                                                                <textarea class="form-control" id="deskripsi_order" rows="2" placeholder="Tambahkan Deskripsi pada Order (Optional)"  name="deskripsi_order">{{ $data_all_order->deskripsi_order }}</textarea>
                                                                            </div>
                                                                            <div class="d-flex justify-content-between mt-3 mb-3">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <!-- Tab Customer -->
                                                                        <div role="tabpanel" class="tab-pane fade" id="customer<?php echo $data_all_order->id; ?>">       
                                                                            <div class="form-group mt-2">
                                                                                <b><label for="exampleInputEmail1">Nama Pelanggan</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->customer_name }}" aria-label="readonly input example" name="customer_name">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Alamat</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->alamat }}" aria-label="readonly input example" name="alamat">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Lokasi Pelanggan</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->customer_tagging }}" aria-label="readonly input example" name="customer_tagging">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">No.Telp</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->pic }}" aria-label="readonly input example" name="pic">
                                                                            </div>
                                                                            <div class="form-group mt-1">
                                                                                <b><label for="exampleInputEmail1">Kode QR-Code</label></b>
                                                                                <input class="form-control bg-white" type="text" value="{{ $data_all_order->qr_code }}" aria-label="readonly input example" name="qr_code">
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

                                            <!-- Assign screen modal -->
                                                <div class="modal fade" id="assignModal<?php echo $data_all_order->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            
                                                        <div class="modal-header bg-outline-primary">
                                                            <h4 class="modal-title"><b>Assign Order</b></h4>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body pb-5 px-sm-5 pt-50">
                                                            <div class="text-center mb-2 mt-2">
                                                                <h1 class="mb-1">Kirim Order ke Aplikasi Teknisi</h1>
                                                                <p class="mb-3">Pastikan plotting order sesuai dengan tim yang akan mengerjakan.</p>
                                                            </div>
                                                                <form id="assign_form<?php echo $data_all_order->id; ?>" class="form" action="/assign_order" method="post">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                                <input type="hidden" name="id" value="{{ $data_all_order->id }}"> 
                                                                    <div class="row">
                                                                        <div class="form-group mt-1">
                                                                            <div class="mb-1">
                                                                                <label for="keterangan_status">Assign Status</label>
                                                                                <select class="form-select" id="keterangan_status" name="keterangan_status" required>     
                                                                                    <option value="">Pilih Status</option>          
                                                                                    <option value="Assigned"{{$data_all_order->keterangan_status == "Assigned" ? 'selected' : ''}}>Assigned</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-12">
                                                                            <div class="mb-1" >
                                                                                <label class="form-label" for="no_order">No. Order</label>
                                                                                <input type="text" id="no_order" class="form-control bg-white" value="{{ $data_all_order->no_order}}" aria-label="readonly input example" name="no_order" required disabled/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-12">
                                                                            <div class="mb-1 position-relative">
                                                                                <label class="form-label" for="tgl_order">Tgl Order</label>
                                                                                <input type="text" class="form-control pickadate-short-string" name="tgl_order" id="tgl_order" value="{{ $data_all_order->tgl_order }}" aria-label="readonly input example" name="tgl_order" required disabled />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="mb-1">
                                                                                <div class="mb-1">
                                                                                    <label class="form-label" for="deskripsi_order">Order Summary</label>
                                                                                    <textarea class="form-control bg-white" id="deskripsi_order" rows="2" aria-label="readonly input example" name="deskripsi_order" required disabled>[{{$data_all_order->no_order}}] {{$data_all_order->order_type}}_{{$data_all_order->customer_name}}_{{ $data_all_order->alamat }}_{{ $data_all_order->pic }}_{{ $data_all_order->bandwidth }}M_{{ $data_all_order->sto_name }}
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mt-1">
                                                                            <div class="mb-1">
                                                                                <label for="nik">Teknisi Assign</label>
                                                                                <select class="form-select" id="nik" name="nik" required>     
                                                                                    <option value="">Pilih Teknisi</option>          
                                                                                    <option value="18940656"{{$data_all_order->nik == "18940656" ? 'selected' : ''}}>Miftachul Chusnul Manaf</option>
                                                                                    <option value="18950266"{{$data_all_order->nik == "18950266" ? 'selected' : ''}}>M Nur Mubarok</option> 
                                                                                    <option value="18960662"{{$data_all_order->nik == "18960662" ? 'selected' : ''}}>Mochammad Jefri</option>  
                                                                                    <option value="18980405"{{$data_all_order->nik == "18980405" ? 'selected' : ''}}>Yudivan Ilham Santoso</option> 
                                                                                    <option value="18990256"{{$data_all_order->nik == "18990256" ? 'selected' : ''}}>Husni Dwi Dhuhawan Al Mubarok</option> 
                                                                                    <option value="18990339"{{$data_all_order->nik == "18990339" ? 'selected' : ''}}>Muchamad Aris Setiawan</option> 
                                                                                    <option value="19890021"{{$data_all_order->nik == "19890021" ? 'selected' : ''}}>Rycco Permana Saputra</option> 
                                                                                    <option value="19920124"{{$data_all_order->nik == "19920124" ? 'selected' : ''}}>Dennis Bagus Satria</option> 
                                                                                    <option value="19940226"{{$data_all_order->nik == "19940226" ? 'selected' : ''}}>Wisnu Hernindya Noviantoro</option>
                                                                                    <option value="19960049"{{$data_all_order->nik == "19960049" ? 'selected' : ''}}>Muhammad Novrizal Irsan</option>
                                                                                    <option value="20810003"{{$data_all_order->nik == "20810003" ? 'selected' : ''}}>Mochamad Hanifan</option>
                                                                                    <option value="20900011"{{$data_all_order->nik == "20900011" ? 'selected' : ''}}>Fatkhurokhman</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="mb-1">
                                                                                <div class="mb-1">
                                                                                    <label class="form-label" for="note_assign">Add Note</label>
                                                                                    <textarea class="form-control" id="note_assign" rows="2" placeholder="Tambahkan catatan pada Order" aria-label="readonly input example" name="note_assign" required></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- Assign screen modal -->
                                            @endforeach  
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.Order</th>
                                                <th>Tgl Order</th>
                                                <th>Nama Customer</th>
                                                <th>Alamat</th>
                                                <th>STO</th>
                                                <th>Product Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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