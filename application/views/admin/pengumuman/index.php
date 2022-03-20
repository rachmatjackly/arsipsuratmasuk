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
    <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>pengumuman/save_pengumuman">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Pengumuman</label>
                                    <input type="text" required class="form-control" value="<?php echo @$row3[0]?>"
                                        name="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Pengumuman</label>
                                    <input type="date" required class="form-control" value="" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Pengumuman</label>
                                    <input type="text" required class="form-control" value="" name="3">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Pengumuman</label>
                                    <input type="text" required class="form-control" value="" name="2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Isi Pengumuman</label>
                                    <textarea class="form-control" name="4" id="quillEditor" rows="3"></textarea>
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
                            <thead class=" text-primary">
                                <th></th>
                                <th>Nomor Pengumuman</th>
                                <th>Tanggal Pengumuman</th>
                                <th>Dibuat Oleh</th>
                                <th>Jenis Pengumuman</th>
                                <th>Judul Pengumuman</th>
                                <th>Isi Pengumuman</th>
                            </thead>
                            <tbody id="result">
                                <?php
                              foreach($data as $data): 
                                ?>
                                <tr>
                                    <td style="width: 3%">
                                        <a
                                            href="<?= base_url();?>admin/pengumuman/<?= $data->nm_pengumuman ?>/edit">Edit</a>⠀⠀
                                        <a href="#" class="delete" data-id="<?= $data->nm_pengumuman?>">Hapus</a>
                                    </td>
                                    <td><?= $data->nm_pengumuman?></td>
                                    <td><?= $data->tg_pengumuman?></td>
                                    <td><?= $data->id_user?></td>
                                    <td><?= $data->jk_pengumuman?></td>
                                    <td><?= $data->judul_pengumuman?></td>
                                    <td><a
                                            href="<?= base_url()?>admin/pengumuman/<?= $data->nm_pengumuman ?>/detail">Lihat</a>
                                    </td>
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
                        url: "<?= base_url()?>/pengumuman/delete_pengumuman/",
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