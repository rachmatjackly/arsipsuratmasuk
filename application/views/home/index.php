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
                            <input type="text" class="form-control" name="t_cari" value="<?php// echo @$_GET["cari"]?>" placeholder="Cari"> 
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
                              foreach($pengumuman as $peng): 
                            ?>
                          <tr>
                            <td><?= $peng->nm_pengumuman?></td>
                            <td><?= $peng->tg_pengumuman?></td>
                            <td>
                              <?php
                                foreach($user as $usr): 
                                  if($peng->nm_pengumuman == $usr->id_user):
                                    echo $usr->nama_user; 
                                  endif;
                                endforeach;
                              ?>
                            </td>
                            <td><?= $peng->jk_pengumuman?></td>
                            <td><?= $peng->judul_pengumuman?></td>
                            <td><a href="isi_pengumuman_home.php?id=<?= $peng->nm_pengumuman?>">Lihat</a></td>
                          </tr>
                            <?php endforeach?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <!--------HALAMAN-------->
        
      </div>