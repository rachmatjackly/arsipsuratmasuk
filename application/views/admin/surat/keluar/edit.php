<div class="content">

    <!-------------INPUT--------->
    <form method="post" action="<?= base_url() ?>surat/update_surat_keluar/<?= $data[0]->nm_sr_luar ?>" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Surat Keluar</label>
                                    <input readonly type="text" required class="form-control" value="<?= $data[0]->nm_sr_luar ?>" name="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Surat Dibuat</label>
                                    <input type="date" required class="form-control" value="<?= $data[0]->tg_sr_luar_bt ?>" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Pelaksanaan Kegiatan</label>
                                    <input type="date" required class="form-control" value="<?= $data[0]->tg_sr_luar_lk ?>" name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Perihal Surat Keluar</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->perihal_luar ?>" name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Surat Keluar</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->perihal_luar ?>" name="4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pembuat Surat Keluar</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->pembuat_sr_luar ?>" name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kegiatan Surat</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->jk_luar ?>" name="6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerima Surat Keluar</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->penerima_sr_luar ?>" name="7">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dokumen Surat Keluar</label>
                                    <p><?= $data[0]->dok_luar ?></p>
                                    <input type="file" name="file1" style="opacity: 100;position: inherit">
                                    <span style="font-size:12px;color:red" >Note: Jika dokumen tidak diedit dibiarkan kosong saja.</span>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="form-group">
                                    <label></label><br>
                                    <button class="btn btn-primary btn-round" name="simpan"
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