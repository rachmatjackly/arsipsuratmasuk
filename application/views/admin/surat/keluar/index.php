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
                    <form method="post" action="<?= base_url() ?>surat/save_surat_keluar" enctype="multipart/form-data">
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputtext1">Nomor Surat Keluar</label>
                                <input type="text" class="form-control" id="exampleInputtext1" name="0">
                            </div>
                            <div class="row row-xs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Surat Dibuat</label>
                                        <input type="date" required class="form-control" name="1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Pelaksanaan Kegiatan</label>
                                        <input type="date" required class="form-control" name="2">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-xs">
                                <div class="form-group col-lg-6">
                                    <label for="exampleInputtext1">Jenis Surat Keluar</label>
                                    <input type="text" class="form-control" id="exampleInputtext1" name="3">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="exampleInputtext1">Judul Surat Keluar</label>
                                    <input type="text" class="form-control" id="exampleInputtext1" name="4">
                                </div>
                            </div>
                            <div class="row row-xs">
                                <div class="form-group col-lg-6">
                                    <label for="exampleInputtext1">Pembuat Surat Keluar</label>
                                    <input type="text" class="form-control" id="exampleInputtext1" name="5">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="exampleInputtext1">Penerima Surat Keluar</label>
                                    <input type="text" class="form-control" id="exampleInputtext1" name="7">
                                </div>
                            </div>
                            <div class="row row-sm">
                                <label for="exampleInputtext1">Dokumen Surat Keluar</label>
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
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mb-0">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="wd-15p border-bottom-0">Nomor Surat Keluar</th>
                                    <th class="wd-15p border-bottom-0">Tanggal Surat Dibuat</th>
                                    <th class="wd-20p border-bottom-0">Tanggal Pelaksanaan Kegiatan</th>
                                    <th class="wd-15p border-bottom-0">Jenis Surat Keluar</th>
                                    <th class="wd-10p border-bottom-0">Judul Surat Keluar</th>
                                    <th class="wd-25p border-bottom-0">Pembuat Surat Keluar</th>
                                    <th class="wd-15p border-bottom-0">Penerima Surat Keluar</th>
                                    <th class="wd-10p border-bottom-0">Dokumen Surat Keluar</th>
                                    <th class="wd-25p border-bottom-0">Admin Yang Memasukan</th>
                                </tr>
                            </thead>
                            <tbody>
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
    <!-- row closed -->

</div>
<!-- /Container -->
</div>
<!-- /main-content -->

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
                        url: "<?= base_url()?>/surat/delete_surat_keluar/",
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