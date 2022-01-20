<?php session_start();
include "koneksi.php";
include "get_user.php";
if ( isset( $_GET[ "edit" ] ) ) {
	$sql3 = "SELECT *  FROM `tb_pengumuman` WHERE `nm_pengumuman` = '$_GET[id]'";
	$result3 = $conn->query( $sql3 );
	$row3 = $result3->fetch_array();
}
if ( isset( $_GET[ "hapus" ] ) ) {
    //hapus
    $perintah="DELETE FROM `tb_pengumuman` WHERE `nm_pengumuman` = $_GET[id]";
    if ($conn->query($perintah) === TRUE) {
      echo "<script>alert('Data Dihapus'); document.location.href='pengumuman.php?ofset=0';</script>";
    } else {
      echo "Error: " . $perintah . "<br>" . $conn->error;
    }
}
if (isset($_POST["simpan"])){
    $perintah="INSERT INTO `tb_pengumuman` VALUES ('$_POST[0]', '$_POST[1]', '$_POST[2]', '$_POST[3]', '$gusta3[0]', '$_POST[4]');";
    if ($conn->query($perintah) === TRUE) {
      echo "<script>alert('Data Tersimpan.'); document.location.href='pengumuman.php?ofset=0';</script>";
    } else {
      echo "<script>alert('Data Tidak tersimpan. Terdapat duplikasi pada nomor pengumuman.'); document.location.href='pengumuman.php?ofset=0';</script>";
    }
}
if (isset($_POST["update"])){
    $perintah="UPDATE `tb_pengumuman` SET `tg_pengumuman` = '$_POST[1]', `judul_pengumuman` = '$_POST[2]', `jk_pengumuman` = '$_POST[3]', `isi_pengumuman` = '$_POST[4]' WHERE `tb_pengumuman`.`nm_pengumuman` = '$_GET[id]';";
    if ($conn->query($perintah) === TRUE) {
      echo "<script>alert('Data Diperbaharui.'); document.location.href='pengumuman.php?ofset=0';</script>";
    } else {
      echo "Error: " . $perintah . "<br>" . $conn->error;
    }
}
if (isset($_POST["b_cari"])){
    echo "<script>document.location.href='pengumuman.php?ofset=0&cari=$_POST[t_cari]'</script>";
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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-----------Rich Text script------------>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>  
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

    <body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a  class="simple-text logo-normal">
          UNIV. GUNADARMA
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="surat_keluar.php?ofset=0">
              <i class="nc-icon nc-minimal-up"></i>
              <p>Surat Keluar</p>
            </a>
          </li>
          <li>
            <a href="surat_masuk.php?ofset=0">
              <i class="nc-icon nc-minimal-down"></i>
              <p>Surat Masuk</p>
            </a>
          </li>
		  <li class="active">
            <a href="pengumuman.php?ofset=0">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Pengumuman</p>
            </a>
          </li>
          <li>
            <a href="user.php?ofset=0">
              <i class="nc-icon nc-satisfied"></i>
              <p>Admin</p>
            </a>
          </li>
          <li>
            <a href="logout.php">
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
            <a class="navbar-brand" href="javascript:;">Halaman Pengumuman</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <p>
                    <span class=" d-md-block"><?php echo $gusta3["nama_user"]?></span>
                  </p>
                  <i class="nc-icon nc-single-02"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <!-------------INPUT--------->
          <form method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Nomor Pengumuman</label>
                                <input <?php if(@$_GET["id"]!=""){echo " disabled ";}?> type="text" required class="form-control" value="<?php echo @$row3[0]?>" name="0" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Tanggal Pengumuman</label>
                                <input type="date" required class="form-control" value="<?php echo @$row3[1]?>" name="1" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Jenis Pengumuman</label>
                                <input type="text" required class="form-control" value="<?php echo @$row3[3]?>" name="3" >
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Judul Pengumuman</label>
                                <input type="text" required class="form-control" value="<?php echo @$row3[2]?>" name="2" >
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Isi Pengumuman</label>
                                <textarea name="4" ><?php echo @$row3[5]?></textarea>
                              </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                              <div class="form-group">
                                <label></label><br>
                                <?php 
                                  if(@$_GET['id']!=""){
                                      ?><button class="btn btn-primary btn-round" name="update" type="submit">Update</button><?php
                                  }else{
                                      ?><button class="btn btn-primary btn-round" name="simpan" type="submit">Simpan</button><?php
                                  }?>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
          </form>
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
                          <th></th>
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
                            <td style="width: 3%">
                                  <a href="pengumuman.php?ofset=<?php echo $_GET["ofset"]?>&edit&id=<?php echo $row3["nm_pengumuman"];?>">Edit</a>⠀⠀
                                  <a href="pengumuman.php?ofset=<?php echo $_GET["ofset"]?>&hapus&id=<?php echo $row3["nm_pengumuman"];?>" OnClick="return confirm('Surat Keluar <?php echo $row3[0]; ?> akan dihapus. Lanjutkan?')">Hapus</a>
                            </td>
                            <td><?php echo $row3[0];?></td>
                            <td><?php echo $row3[1];?></td>
                            <td><?php echo $dibuat_oleh["nama_user"];?></td>
                            <td><?php echo $row3[3];?></td>
                            <td><?php echo $row3[2];?></td>
                            <td><a href="isi_pengumuman.php?id=<?php echo $row3[0];?>">Lihat</a></td>
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
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-----------Rich Text script------------>
  <script>  
    CKEDITOR.replace('4');  
    CKEDITOR.replace('editor2');  
  
    function getData() {  
        //Get data written in first Editor   
        var editor_data = CKEDITOR.instances['editor1'].getData();  
        //Set data in Second Editor which is written in first Editor  
        CKEDITOR.instances['editor2'].setData(editor_data);  
    }  
</script>
</body>
</html>