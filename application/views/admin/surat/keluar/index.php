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
                                    <label>Jenis Surat Keluar</label>
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
                                    <input type="text" class="form-control" name="t_cari" id="search" value=""
                                        placeholder="Cari">
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
                                <th>Jenis Surat Keluar</th>
                                <th>Judul Surat Keluar</th>
                                <th>Pembuat Surat Keluar</th>
                                <th>Penerima Surat Keluar</th>
                                <th>Dokumen Surat Keluar</th>
                                <th>Admin Yang Memasukan</th>
                            </thead>
                            <tbody id="result">
                                <?php
                                    foreach($surat_keluar as $data) :
                                ?>
                                <tr>
                                    <td style="width: 3%">
                                        <a
                                            href="<?= base_url() ?>admin/surat_keluar/edit/<?= $data->nm_sr_luar ?>">Edit</a>⠀⠀
                                        <a href="#" class="delete" data-id="<?= $data->nm_sr_luar ?>">Hapus</a>
                                    </td>
                                    <td><?= $data->nm_sr_luar ?></td>
                                    <td><?= $data->tg_sr_luar_bt ?></td>
                                    <td><?= $data->tg_sr_luar_lk?></td>
                                    <td><?= $data->perihal_luar ?></td>
                                    <td><?= $data->judul_luar ?></td>
                                    <td><?= $data->pembuat_sr_luar ?></td>
                                    <td><?= $data->penerima_sr_luar ?></td>
                                    <td><a href="<?= base_url() ?>/assets/uploads/<?= $data->dok_luar?>">Unduh</a></td>
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

<script>
$(document).ready(function() {
    $("#search").keyup(function() {
        var search = $(this).val();
        console.log(search);
        $.ajax({
            type: "post",
            url: "<?= base_url() ?>surat/search/keluar",
            data: {
                search: search,
            },
            success: function(data) {
                $("#result").html(data);
            }
        });
    });

    $(".delete").each(function() {
        $(".delete").click(function() {
            var id = $(this).data("id");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= base_url()?>/surat/delete_surat_keluar/",
                        type: "post",
                        data: "id=" + id,
                        success: function() {
                            Swal.fire(
                                'Deleted!',
                                'Your data has been deleted.',
                                'success'
                            );
                            setTimeout(function() {
                                window.location.reload(1);
                            }, 1500);
                        }
                    })
                }
            })
        })
    })



});
</script>