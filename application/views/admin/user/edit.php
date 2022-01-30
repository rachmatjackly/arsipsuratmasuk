<div class="content">
    <!-------------INPUT--------->
    <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>user/update_user/<?= $data[0]->id_user ?>">
        <?php if($this->session->nama){?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->nama_user ?>" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="number" required class="form-control" value="<?= $data[0]->no_hp ?>" name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" required class="form-control" value="<?= $data[0]->email ?>" name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" required class="form-control" value="<?= $data[0]->username ?>" name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" value="" name="6">
                                    <span style="font-size:12px;color:red" >Note: Jika password tidak diedit dibiarkan kosong saja.</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto Profil</label>
                                    <img src="<?= base_url() ?>assets/uploads/images/<?= $data[0]->foto_user ?>" class="col-md-5">
                                    <input type="file" name="file1" style="opacity: 100;position: inherit">
                                    <span style="font-size:12px;color:red" >Note: Jika foto profil tidak diedit dibiarkan kosong saja.</span>
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
        <?php }?>
    </form>

</div>