<div class="content">

    <!-------------INPUT--------->
    <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>surat/save_surat_masuk">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Surat Masuk</label>
                                    <input type="text" required class="form-control" value="" name="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Yang Tercantum Pada Surat</label>
                                    <input type="date" required class="form-control"
                                        value="" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Surat Diterima</label>
                                    <input type="date" required class="form-control"
                                        value="" name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Perihal Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="" name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="" name="4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pengirim Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="" name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kegiatan Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="" name="6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerima Surat Masuk</label>
                                    <input type="text" required class="form-control"
                                        value="" name="7">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dokumen Surat Masuk</label>
                                    <input type="file" name="file1" style="opacity: 100;position: inherit">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="form-group">
                                    <label></label><br>
                                    <button class="btn btn-primary btn-round" name="simpan" type="submit">Simpan</button>
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
                                    <input type="text" class="form-control" name="t_cari" id="search" value="" placeholder="Cari">
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <div class="form-group">
                                    <label></label><br>
                                    <button class="btn btn-primary btn-round" name="b_cari"
                                        type="submit">Cari</button>
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
                                <th>Nomor Surat Masuk</th>
                                <th>Tanggal Surat</th>
                                <th>Tanggal Surat Diterima</th>
                                <th>Perihal Surat Masuk</th>
                                <th>Judul Surat Masuk</th>
                                <th>Pengirim Surat Masuk</th>
                                <th>Jenis Kegiatan Surat Masuk</th>
                                <th>Penerima Surat Masuk</th>
                                <th>Dokumen Surat Masuk</th>
                                <th>Admin Yang Memasukan</th>
                            </thead>
                            <tbody id="result">
                                <?php 
                                    foreach($surat_masuk as $data): 
                                ?>
                                <tr>
                                    <td style="width: 3%">
                                        <a href="<?= base_url() ?>admin/surat_masuk/edit/<?= $data->nm_sr_masuk ?>">Edit</a>⠀⠀
                                        <a href="<?= base_url() ?>surat/delete_surat_masuk/<?= $data->nm_sr_masuk ?>"
                                            OnClick="return confirm('Surat Keluar akan dihapus. Lanjutkan?')">Hapus</a>
                                    </td>
                                    <td><?= $data->nm_sr_masuk ?></td>
                                    <td><?= $data->tg_sr_masuk ?></td>
                                    <td><?= $data->tg_sr_masuk_dt ?></td>
                                    <td><?= $data->perihal_masuk ?></td>
                                    <td><?= $data->judul_masuk ?></td>
                                    <td><?= $data->pengirim_masuk ?></td>
                                    <td><?= $data->jk_masuk ?></td>
                                    <td><?= $data->penerima_masuk ?></td>
                                    <td><a href="<?= base_url() ?>/asset/uploads/<?= $data->dok_msk?>">Unduh</a></td>
                                    <td><?= $data->id_user ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------HALAMAN-------->

</div>

<script>
    $(document).ready(function() {
        $("#search").keyup(function(){
            var search = $(this).val();
            console.log(search);
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>surat/search/masuk",
                data: {
                    search: search,
                },
                success: function(data){
                    $("#result").html(data);
                }
            });
        });
    });
</script>