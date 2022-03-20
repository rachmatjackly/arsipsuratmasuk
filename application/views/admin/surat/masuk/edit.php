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
    <form method="post" enctype="multipart/form-data"
        action="<?= base_url() ?>surat/update_surat_masuk/<?= $data[0]->nm_sr_masuk ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Surat Masuk</label>
                                    <input readonly type="text" required class="form-control"
                                        value="<?= $data[0]->nm_sr_masuk ?>" name="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Yang Tercantum Pada Surat</label>
                                    <input type="date" required class="form-control"
                                        value="<?= $data[0]->tg_sr_masuk ?>" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Surat Diterima</label>
                                    <input type="date" required class="form-control"
                                        value="<?= $data[0]->tg_sr_masuk_dt ?>" name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="<?= $data[0]->perihal_masuk ?>" name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="<?= $data[0]->judul_masuk ?>" name="4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pengirim Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="<?= $data[0]->pengirim_masuk ?>" name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerima Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="<?= $data[0]->penerima_masuk ?>" name="7">
                                </div>
                            </div>
                            <div class="row row-sm">
                            <label>Dokumen Surat Keluar</label>
                                <p><?= $data[0]->dok_msk ?></p>
                                <div class="col-sm-7 col-md-6 col-lg-4">
                                    <div class="input-group file-browser">
                                        <input type="text" class="form-control border-right-0 browse-file"
                                            placeholder="choose" readonly>
                                        <label class="input-group-btn">
                                            <span class="btn btn-default">
                                                Browse <input type="file" name="file1" class="d-none" multiple>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <span style="font-size:12px;color:red">Note: Jika dokumen tidak diedit dibiarkan
                                    kosong saja.</span>
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
</div>