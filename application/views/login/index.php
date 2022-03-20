<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> Arsip Surat Masuk </title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Icons css -->
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="<?= base_url() ?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="<?= base_url() ?>assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sidemenu.css">

    <!--- Style css --->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/boxed.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/dark-boxed.css" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="<?= base_url() ?>assets/css/style-dark.css" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="<?= base_url() ?>assets/css/skin-modes.css" rel="stylesheet" />

    <!--- Animations css-->
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet">

</head>

<body class="error-page1 main-body bg-light text-dark">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?= base_url() ?>assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- The image half -->
                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                    <div class="row wd-100p mx-auto text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                            <img src="<?= base_url() ?>assets/img/media/gunadarma.jpg"
                                class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        </div>
                    </div>
                </div>
                <!-- The content half -->
                <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                    <div class="card-sigin">
										<?php if($this->session->flashdata('login') == 'gagal'): ?>
                                        <div class="alert alert-danger mg-b-10" role="alert">
                                            <button aria-label="Close" class="close" data-bs-dismiss="alert"
                                                type="button">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Code Wrong!</strong> Please check your code.
                                        </div>
										<?php endif ?>

										<?php if($this->session->flashdata('login') == 'salah'): ?>
                                        <div class="alert alert-danger mg-b-10" role="alert">
                                            <button aria-label="Close" class="close" data-bs-dismiss="alert"
                                                type="button">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Username or Password Wrong!</strong> Please check your username and password.
                                        </div>
										<?php endif ?>
										
                                        <div class="mb-5 d-flex">
                                            <a href="index.html"><img src="<?= base_url() ?>assets/img/brand/logo.png"
                                                    class="sign-favicon-a ht-40" alt="logo">
                                                <img src="<?= base_url() ?>assets/img/brand/logo.png"
                                                    class="sign-favicon-b ht-40" alt="logo">
                                            </a>
                                            <h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Universitas Gunadarma</h1>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="main-signup-header">
                                                <h5 class="fw-semibold mb-4">Please sign in to continue.</h5>
                                                <form action="<?= base_url() ?>authentication/submitLogin"
                                                    method="post">
                                                    <div class="form-group">
                                                        <label>Username</label> <input name="username"
                                                            class="form-control" placeholder="Enter your username"
                                                            type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input name="password"
                                                            class="form-control" placeholder="Enter your password"
                                                            type="password">
                                                    </div>
													<input name="number1" value="<?= $random_number1 ?>" type="text" hidden>
														<input name="number2" value="<?= $random_number2 ?>" type="text" hidden>
                                                    <div class="form-group d-flex">
                                                        <label class="my-auto" style="width:15%;font-weight:bold"><?= $random_number1 ?> + <?= $random_number2 ?>
                                                            = </label> <input name="captcha" class="form-control"
                                                            placeholder="Enter code" type="text">
                                                    </div><button class="btn btn-main-primary btn-block">Sign
                                                        In</button>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">Forgot password?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>

    </div>
    <!-- End Page -->

    <!-- JQuery min js -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Ionicons js -->
    <script src="<?= base_url() ?>assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="<?= base_url() ?>assets/plugins/moment/moment.js"></script>

    <!-- P-scroll js -->
    <script src="<?= base_url() ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- eva-icons js -->
    <script src="<?= base_url() ?>assets/js/eva-icons.min.js"></script>

    <!-- Rating js-->
    <script src="<?= base_url() ?>assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="<?= base_url() ?>assets/plugins/rating/jquery.barrating.js"></script>

    <!-- custom js -->
    <script src="<?= base_url() ?>assets/js/custom.js"></script>

</body>

</html>