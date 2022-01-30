<div class="content">
    <!-------------INPUT--------->
    <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>user/save_user">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" required class="form-control" value="" name="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="number" required class="form-control" value="" name="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" required class="form-control" value="" name="3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" required class="form-control" value="" name="5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" required class="form-control" value="" name="6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="0">Operator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto Profil</label>
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
                                        value="" id="search" placeholder="Cari">
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
                                <th>Nama Lengkap</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Foto Admin</th>
                            </thead>
                            <tbody id="result">
                                <?php foreach($data as $data): ?>
                                <tr>
                                    <td style="width: 3%">
                                        <a
                                            href="<?= base_url() ?>admin/user/<?= $data->id_user ?>/edit">Edit</a>⠀⠀
                                    </td>
                                    <td><?= $data->nama_user ?></td>
                                    <td><?= $data->no_hp ?></td>
                                    <td><?= $data->email ?></td>
                                    <td><img src="<?= base_url() ?>assets/uploads/images/<?= $data->foto_user ?>" class="col-md-5"></td>
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
    $('#search').keyup(function() {
      var search = $(this).val();
      $.ajax({
        url: "<?= base_url() ?>user/search",
        type: "post",
        data: {
          search: search,
        },
        success: function(data) {
          $('#result').html(data);
        }
      })
    });
  });
</script>