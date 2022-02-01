<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="<?=base_url()?>assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    Admin Page
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
name='viewport' />
<!-----------Rich Text script------------>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- CSS Files -->
<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url() ?>assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="<?= base_url() ?>assets/demo/demo.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>

<body class="">
<div class="wrapper" style="background-color: #f4f3ef">
<div class="sidebar" data-color="white" data-active-color="danger">
<div class="logo">
    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
        <div class="logo-image-small">
            <img src="<?= base_url() ?>assets/img/logo-small.png">
        </div>
        <!-- <p>CT</p> -->
    </a>
    <a class="simple-text logo-normal">
        UNIV. GUNADARMA
        <!-- <div class="logo-image-big">
<img src="../assets/img/logo-big.png">
</div> -->
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="<?= $nav[0] ?>">
            <a href="<?= base_url() ?>admin">
                <i class="nc-icon nc-bank"></i>
                <p>Home</p>
            </a>
        </li>
        <li class="<?= $nav[1] ?>">
            <a href="<?= base_url() ?>admin/surat_keluar">
                <i class="nc-icon nc-minimal-up"></i>
                <p>Surat Keluar</p>
            </a>
        </li>
        <li class="<?= $nav[2] ?>">
            <a href="<?= base_url() ?>admin/surat_masuk">
                <i class="nc-icon nc-minimal-down"></i>
                <p>Surat Masuk</p>
            </a>
        </li>
        <li class="<?= $nav[3] ?>">
            <a href="<?= base_url() ?>admin/pengumuman">
                <i class="nc-icon nc-bullet-list-67"></i>
                <p>Pengumuman</p>
            </a>
        </li>
        <?php if($this->session->status == 1) : ?>
        <li class="<?= $nav[4] ?>">
            <a href="<?= base_url() ?>admin/user">
                <i class="nc-icon nc-satisfied"></i>
                <p>Admin</p>
            </a>
        </li>
        <?php endif ?>
        <li>
            <a href="<?= base_url() ?>admin/logout">
                <i class="nc-icon nc-button-power"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</div>
</div>

<div class="main-panel">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="javascript:;"><?= $title ?></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link" href="#">
                        <p>
                            <span class=" d-md-block"><?php echo $this->session->nama ?></span>
                        </p>
                        <i class="nc-icon nc-single-02"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->