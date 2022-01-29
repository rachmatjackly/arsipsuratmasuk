<div class="content">

    <!-------------INPUT--------->
    <form method="post" action="<?= base_url() ?>surat/save_surat_keluar" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Surat Keluar</label>
                                    <input type="text" required class="form-control" value="" name="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Surat Dibuat</label>
                                    <input type="date" required class="form-control" value="" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Pelaksanaan Kegiatan</label>
                                    <input type="date" required class="form-control" value="" name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Perihal Surat Keluar</label>
                                    <input type="text" required class="form-control" value="" name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Surat Keluar</label>
                                    <input type="text" required class="form-control" value="" name="4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pembuat Surat Keluar</label>
                                    <input type="text" required class="form-control" value="" name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kegiatan Surat</label>
                                    <input type="text" required class="form-control" value="" name="6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerima Surat Keluar</label>
                                    <input type="text" required class="form-control" value="" name="7">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dokumen Surat Keluar</label>
                                    <input type="file" name="file1" style="opacity: 100;position: inherit">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="form-group">
                                    <label></label><br>
                                    <button class="btn btn-primary btn-round" name="simpan"
                                        type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
                                    <input type="text" class="form-control" name="t_cari"
                                        value="<?php echo @$_GET["cari"]?>" placeholder="Cari">
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
                        <table class="table" style="width: 200%">
                            <thead class=" text-primary">
                                <th></th>
                                <th>Nomor Surat Keluar</th>
                                <th>Tanggal Surat Dibuat</th>
                                <th>Tanggal Pelaksanaan Kegiatan</th>
                                <th>Perihal Surat Keluar</th>
                                <th>Judul Surat Keluar</th>
                                <th>Pembuat Surat Keluar</th>
                                <th>Jenis Kegiatan Surat</th>
                                <th>Penerima Surat Keluar</th>
                                <th>Dokumen Surat Keluar</th>
                                <th>Admin Yang Memasukan</th>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($surat_keluar as $data) :
                                ?>
                                <tr>
                                    <td style="width: 3%">
                                        <a href="<?= base_url() ?>admin/surat_keluar/edit/<?= $data->nm_sr_luar ?>">Edit</a>⠀⠀
                                        <a href="<?= base_url() ?>surat/delete_surat_keluar/<?= $data->nm_sr_luar ?>" OnClick="return confirm('Surat Keluar yakin akan dihapus. Lanjutkan?')">Hapus</a>
                                    </td>
                                    <td><?= $data->nm_sr_luar ?></td>
                                    <td><?= $data->tg_sr_luar_bt ?></td>
                                    <td><?= $data->tg_sr_luar_lk?></td>
                                    <td><?= $data->perihal_luar ?></td>
                                    <td><?= $data->judul_luar ?></td>
                                    <td><?= $data->pembuat_sr_luar ?></td>
                                    <td><?= $data->jk_luar ?></td>
                                    <td><?= $data->penerima_sr_luar ?></td>
                                    <td><a href="upload/<?php ?>">Unduh</a></td>
                                    <td><?= $data->id_user ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------HALAMAN-------->

</div>