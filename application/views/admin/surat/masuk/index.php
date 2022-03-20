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
                                    <input type="date" required class="form-control" value="" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Surat Diterima</label>
                                    <input type="date" required class="form-control" value="" name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Surat Masuk</label>
                                    <input type="text" required class="form-control" value="" name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Surat Masuk</label>
                                    <input type="text" required class="form-control" value="" name="4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pengirim Surat Masuk</label>
                                    <input type="text" required class="form-control" value="" name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penerima Surat Masuk</label>
                                    <input type="text" required class="form-control" value="" name="7">
                                </div>
                            </div>
                            <div class="row row-sm">
                            <label for="exampleInputtext1">Dokumen Surat Masuk</label>
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

    <!---------TABEL------->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <th></th>
                                <th class="wd-15p border-bottom-0">Nomor Surat Masuk</th>
                                <th class="wd-15p border-bottom-0">Tanggal Surat</th>
                                <th class="wd-15p border-bottom-0">Tanggal Surat Diterima</th>
                                <th class="wd-15p border-bottom-0">Jenis Surat Masuk</th>
                                <th class="wd-15p border-bottom-0">Judul Surat Masuk</th>
                                <th class="wd-15p border-bottom-0">Pengirim Surat Masuk</th>
                                <th class="wd-15p border-bottom-0">Penerima Surat Masuk</th>
                                <th class="wd-15p border-bottom-0">Dokumen Surat Masuk</th>
                                <th class="wd-15p border-bottom-0">Admin Yang Memasukan</th>
                            </thead>
                            <tbody id="result">
                                <?php 
                                    foreach($surat_masuk as $data): 
                                ?>
                                <tr>
                                    <td style="width: 3%">
                                        <a
                                            href="<?= base_url() ?>admin/surat_masuk/edit/<?= $data->nm_sr_masuk ?>">Edit</a>⠀⠀
                                        <a class="delete" data-id="<?= $data->nm_sr_masuk ?>" href="#">Hapus</a>
                                    </td>
                                    <td><?= $data->nm_sr_masuk ?></td>
                                    <td><?= $data->tg_sr_masuk ?></td>
                                    <td><?= $data->tg_sr_masuk_dt ?></td>
                                    <td><?= $data->perihal_masuk ?></td>
                                    <td><?= $data->judul_masuk ?></td>
                                    <td><?= $data->pengirim_masuk ?></td>
                                    <td><?= $data->penerima_masuk ?></td>
                                    <td><a href="<?= base_url() ?>/assets/uploads/<?= $data->dok_msk?>">Unduh</a></td>
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
</div>

<!-- JQuery min js -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $(".delete").each(function() {
        $(".delete").click(function() {
            var id = $(this).data("id");
            swal({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function() {
                    $.ajax({
                        url: "<?= base_url()?>/surat/delete_surat_masuk/",
                        type: "post",
                        data: "id=" + id,
                        success: function() {
                            swal("Deleted!", "Your data has been deleted.",
                                "success");
                            setTimeout(function() {
                                window.location.reload(1);
                            }, 1500);
                        }
                    })

                });

        })
    })
});
</script>