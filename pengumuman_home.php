<?php session_start();
include "admin/koneksi.php";
if (isset($_POST["b_cari"])){
    echo "<script>document.location.href='pengumuman_home.php?ofset=0&cari=$_POST[t_cari]'</script>";
}
?>
<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

    <body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a  class="simple-text logo-normal">
          UNIV. GUNADARMA
          <!-- <div class="logo-image-big">
            <img src="assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="login.php">
              <i class="nc-icon nc-key-25"></i>
              <p>Login</p>
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
            <a class="navbar-brand" href="javascript:;">Halaman Login</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <!--------------Cari-------->
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label>Kata Kunci</label>
                            <input type="text" class="form-control" name="t_cari" value="<?php echo @$_GET["cari"]?>" placeholder="Cari"> 
                          </div>
                        </div>
                        <div class="col-md-2 ">
                          <div class="form-group">
                            <label></label><br>
                            <button class="btn btn-primary btn-round" name="b_cari" type="submit">Cari</button>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>
        </form>
		<!---------TABEL------->
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>Nomor Pengumuman</th>
                          <th>Tanggal Pengumuman</th>
                          <th>Dibuat Oleh</th>
                          <th>Jenis Pengumuman</th>
                          <th>Judul Pengumuman</th>
                          <th>Isi Pengumuman</th>
                        </thead>
                        <tbody>
                          <?php
                              $ada = @$_GET["cari"];
                              $sql3 = "SELECT *  FROM `tb_pengumuman` WHERE `nm_pengumuman`LIKE '%$ada%' OR `tg_pengumuman` LIKE '%$ada%' OR `judul_pengumuman` LIKE '%$ada%' OR `jk_pengumuman` LIKE '%$ada%' OR `isi_pengumuman` LIKE '%$ada%' LIMIT 10 OFFSET $_GET[ofset]";
                              $result3 = $conn->query( $sql3 );
                              $nourut = 0;
                              while ( $row3 = $result3->fetch_array() ) {
                                  $nourut = $nourut+1;
                                  //ngambil dari tabel user
                                  $dibuat_oleh = $conn->query( "SELECT *  FROM `tb_user` WHERE `id_user` = '$row3[id_user]' or nama_user LIKE '%$ada%'" )->fetch_array();
                                  ////
                            ?>
                          <tr>
                            <td><?php echo $row3[0];?></td>
                            <td><?php echo $row3[1];?></td>
                            <td><?php echo $dibuat_oleh["nama_user"];?></td>
                            <td><?php echo $row3[3];?></td>
                            <td><?php echo $row3[2];?></td>
                            <td><a href="isi_pengumuman_home.php?id=<?php echo $row3[0];?>">Lihat</a></td>
                          </tr>
                            <?php }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <!--------HALAMAN-------->
        
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Creative Tim Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, Dibuat oleh Feisal Jauhari T untuk PI
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
</body>
</html>