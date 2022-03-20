<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> Arsip Surat Masuk </title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/brand/logo.png" type="image/x-icon" />

    <!-- Icons css -->
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Internal Data table css -->
    <link href="<?= base_url() ?>assets/plugins/datatable/datatables.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/plugins/datatable/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/datatable/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!-- Internal Select2 css -->
    <link href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!--Internal  Date time picker-slider css -->
    <link href="<?= base_url() ?>assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/pickerjs/picker.min.css" rel="stylesheet">

    <!-- Internal Spectrum-colorpicker css -->
    <link href="<?= base_url() ?>assets/plugins/spectrum-colorpicker/spectrum.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="<?= base_url() ?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!--  Owl-carousel css-->
    <link href="<?= base_url() ?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!--- Internal Sweet-Alert css-->
    <link href="<?= base_url() ?>assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="<?= base_url() ?>assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!--  Right-sidemenu css -->
    <link href="<?= base_url() ?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!--Internal  Quill css -->
    <link href="../../assets/plugins/quill/quill.snow.css" rel="stylesheet">
    <link href="../../assets/plugins/quill/quill.bubble.css" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sidemenu.css">

    <!-- Maps css -->
    <link href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- style css -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style-dark.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/boxed.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/dark-boxed.css" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="<?= base_url() ?>assets/css/skin-modes.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?= base_url() ?>assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <aside class="app-sidebar sidebar-scroll">
            <div class="main-sidebar-header active">
                <a class="desktop-logo logo-light active" href="index.html"><img width="120"
                        src="<?= base_url() ?>assets/img/brand/logo-small.png" class="main-logo" alt="logo"></a>
                <a class="desktop-logo logo-dark active" href="index.html"><img
                        src="<?= base_url() ?>assets/img/brand/logo-small.png" class="main-logo dark-theme"
                        alt="logo"></a>
                <a class="logo-icon mobile-logo icon-light active" href="index.html"><img
                        src="<?= base_url() ?>assets/img/brand/logo.png" class="logo-icon" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
                        src="<?= base_url() ?>assets/img/brand/logo.png" class="logo-icon dark-theme" alt="logo"></a>
            </div>
            <div class="main-sidemenu">
                <ul class="side-menu">
                    <li class="side-item side-item-category">Main</li>
                    <li class="slide">
                        <a class="side-menu__item" href="<?= base_url()?>admin"><i
                                class="side-menu__icon mdi mdi-bank"></i><span class="side-menu__label">Home</span></a>
                        <a class="side-menu__item" href="<?= base_url() ?>admin/surat_keluar"><i
                                class="side-menu__icon si si-arrow-up"></i><span class="side-menu__label">Surat
                                Keluar</span></a>
                        <a class="side-menu__item" href="<?= base_url() ?>admin/surat_masuk"><i
                                class="side-menu__icon si si-arrow-down"></i><span class="side-menu__label">Surat
                                Masuk</span></a>
                        <a class="side-menu__item" href="<?= base_url() ?>admin/pengumuman"><i
                                class="side-menu__icon fa fa-list"></i><span
                                class="side-menu__label">Pengumuman</span></a>
                        <a class="side-menu__item" href="<?= base_url() ?>admin/user"><i
                                class="side-menu__icon mdi mdi-account-plus"></i><span
                                class="side-menu__label">Admin</span></a>
                        <a class="side-menu__item" href="<?= base_url() ?>admin/logout"><i
                                class="side-menu__icon si si-logout"></i><span
                                class="side-menu__label">Logout</span></a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- main-header -->
            <div class="main-header sticky side-header nav nav-item">
                <div class="container-fluid">
                    <div class="main-header-left ">
                        <div class="responsive-logo">
                            <a href="index.html"><img src="<?= base_url() ?>assets/img/brand/logo.png" class="logo-1"
                                    alt="logo"></a>
                            <a href="index.html"><img src="<?= base_url() ?>assets/img/brand/logo-white.png"
                                    class="dark-logo-1" alt="logo"></a>
                            <a href="index.html"><img src="<?= base_url() ?>assets/img/brand/favicon.png" class="logo-2"
                                    alt="logo"></a>
                            <a href="index.html"><img src="<?= base_url() ?>assets/img/brand/favicon-white.png"
                                    class="dark-logo-2" alt="logo"></a>
                        </div>
                        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                            <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="main-header-right">
                        <ul class="nav nav-item  navbar-nav-right ms-auto">
                            <li class="d-flex">
                                <a class="profile-user d-flex" href=""><i class="fs-3 my-auto mdi mdi-account"></i>
                                    <h6 class="my-auto ms-3"><?= $this->session->nama ?></h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /main-header -->