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

    <!-------------INPUT--------->
    <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>pengumuman/update_pengumuman/<?= $data[0]->nm_pengumuman ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Pengumuman</label>
                                    <input readonly type="text" required
                                        class="form-control" value="<?= $data[0]->nm_pengumuman?>" name="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Pengumuman</label>
                                    <input type="date" required class="form-control" value="<?= $data[0]->tg_pengumuman?>"
                                        name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Pengumuman</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->jk_pengumuman?>"
                                        name="3">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Pengumuman</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->judul_pengumuman?>"
                                        name="2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Isi Pengumuman</label>
                                    <textarea class="form-control" name="4"><?= $data[0]->isi_pengumuman?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="form-group">
                                    <label></label><br>
                                   <button class="btn btn-primary btn-round" name="update"
                                        type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

</div>