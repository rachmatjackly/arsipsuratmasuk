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