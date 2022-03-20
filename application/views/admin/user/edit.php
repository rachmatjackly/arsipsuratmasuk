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
        action="<?= base_url() ?>user/update_user/<?= $data[0]->id_user ?>">
        <?php if($this->session->nama){?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->nama_user ?>"
                                        name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="number" required class="form-control" value="<?= $data[0]->no_hp ?>"
                                        name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" required class="form-control" value="<?= $data[0]->email ?>"
                                        name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->username ?>"
                                        name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" value="" name="6">
                                    <span style="font-size:12px;color:red">Note: Jika password tidak diedit dibiarkan
                                        kosong saja.</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" <?= ($data[0]->status == 1)? "selected" : "" ?>>Admin</option>
                                        <option value="0" <?= ($data[0]->status == 0)? "selected" : "" ?>>Operator
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row row-sm">
                                <div class="row row-sm">
                                    <label>Dokumen Surat Keluar</label>
                                    <img src="<?= base_url() ?>assets/uploads/images/<?= $data[0]->foto_user ?>"
                                        class="img-thumbnail wd-100p wd-sm-200 mg-l-10 mg-b-5">
                                </div>
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
                                <span style="font-size:12px;color:red">Note: Jika foto profil tidak diedit dibiarkan
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
        <?php }?>
    </form>

</div>
</div>