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
          <!--------------isi pengumuman-------->
          <form method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <?php foreach($data as $data): ?>
                                          <center>
                                              <h5><?= $data->judul_pengumuman?></h5>
                                          </center><br>
                                          <b>
                                              <table border="0">
                                                  <tr>
                                                      <td>Tanggal Pengumuman</td>
                                                      <td>:</td>
                                                      <td> <?= $data->tg_pengumuman ?></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Jenis Kegiatan</td>
                                                      <td>:</td>
                                                      <td> <?= $data->jk_pengumuman ?></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Dibuat Oleh</td>
                                                      <td>:</td>
                                                      <td> <?= $data->id_user ;?>
                                                      </td>
                                                  </tr>
                                              </table>
                                          </b><br>
                                          <?= $data->isi_pengumuman ?><br><br>
                                      </div>
                                      <?php endforeach ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
          <!--------HALAMAN-------->

      </div>