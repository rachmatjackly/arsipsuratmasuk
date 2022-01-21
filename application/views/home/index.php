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