<div class="content">
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
                                    <textarea name="4"></textarea>
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
                                    <input type="text" class="form-control" name="t_cari" value="" id="search"
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
                        <table class="table">
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
                                        <a href="#" id="delete" data-id="<?= $data->nm_pengumuman?>">Hapus</a>
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

<script>
CKEDITOR.replace('4');
CKEDITOR.replace('editor2');

function getData() {
    //Get data written in first Editor   
    var editor_data = CKEDITOR.instances['editor1'].getData();
    //Set data in Second Editor which is written in first Editor  
    CKEDITOR.instances['editor2'].setData(editor_data);
}
</script>

<script>
$(document).ready(function() {
    $('#search').keyup(function() {
        var search = $(this).val();
        $.ajax({
            url: "<?= base_url() ?>pengumuman/search",
            type: "post",
            data: {
                search: search,
            },
            success: function(data) {
                $('#result').html(data);
            }
        })
    });

    $("#delete").click(function() {
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
                    url: "<?= base_url()?>/pengumuman/delete_pengumuman/",
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
});
</script>