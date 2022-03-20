

    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1"><?= $title ?></h2>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
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
        <!-- row closed -->

    </div>
    <!-- /Container -->
</div>
<!-- /main-content -->