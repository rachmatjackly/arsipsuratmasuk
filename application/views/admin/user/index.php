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
                                    <label>Nomor Admin</label>
                                    <input type="text" required class="form-control" value="" name="0">
                                </div>
                            </div>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" required class="form-control" value="" name="4">
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
                        <table class="table">
                            <thead class=" text-primary">
                                <th></th>
                                <th>Nomor Admin</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Foto Admin</th>
                            </thead>
                            <tbody>
                                <?php foreach($data as $data): ?>
                                <tr>
                                    <td style="width: 3%">
                                        <a
                                            href="<?= base_url() ?>admin/user/<?= $data->id_user ?>/edit">Edit</a>⠀⠀
                                    </td>
                                    <td><?= $data->id_user ?></td>
                                    <td><?= $data->nama_user ?></td>
                                    <td><?= $data->no_hp ?></td>
                                    <td><?= $data->email ?></td>
                                    <td><?= $data->alamat?></td>
                                    <td><img src="<?= base_url() ?>assets/uploads/images/<?= $data->foto_user ?>" class="col-md-5"></td>
                                </tr>
                                <?php endforeach ?>
                                <?php
                            //   if(@$_GET["cari"] == ""){
                            //       $ada = "WHERE id_user != '$gusta3[id_user]'";
                            //   }else{
                            //       $ada = "WHERE `id_user` LIKE '%$_GET[cari]%' OR `nama_user` LIKE '%$_GET[cari]%' OR `no.hp` LIKE '%$_GET[cari]%' OR `email` LIKE '%$_GET[cari]%' OR `alamat` LIKE '%$_GET[cari]%'";
                            //   }
                            //   $sql3 = "SELECT *  FROM `tb_user` $ada";
                            //   $result3 = $conn->query( $sql3 );
                            //   $nourut = 0;
                            //   while ( $row3 = $result3->fetch_array() ) {
                            //       $nourut = $nourut+1;
                            ?>
                                <tr>
                                    <!-- <td>
                                        <?php if ($_SESSION["aezakmi"] == "admin"){?>
                                        <a
                                            href="user.php?ofset=<?php echo $_GET["ofset"]?>&edit&id=<?php echo $row3[0];?>">Edit</a>
                                        <a href="user.php?ofset=<?php echo $_GET["ofset"]?>&hapus&id=<?php echo $row3[0];?>"
                                            OnClick="return confirm('Pengumuman <?php echo $row3[0]; ?> akan dihapus. Lanjutkan?')">Hapus</a>
                                        <?php }?>
                                    </td>
                                    <td><?php echo $row3[0];?></td>
                                    <td><?php echo $row3[1];?></td>
                                    <td><?php echo $row3[2];?></td>
                                    <td><?php echo $row3[3];?></td>
                                    <td><?php echo $row3[4];?></td>
                                    <td><img src="upload/<?php echo $row3[7];?>" class="col-md-5"></td> -->
                                </tr>
                                <?php// }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------HALAMAN-------->

</div>