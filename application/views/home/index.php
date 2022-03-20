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
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Pengumuman</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Nomor Pengumuman</th>
                                    <th class="wd-15p border-bottom-0">Tanggal Pengumuman</th>
                                    <th class="wd-20p border-bottom-0">Dibuat Oleh</th>
                                    <th class="wd-15p border-bottom-0">Jenis Pengumuman</th>
                                    <th class="wd-10p border-bottom-0">Judul Pengumuman</th>
                                    <th class="wd-25p border-bottom-0">Isi Pengumuman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                              foreach($pengumuman as $peng): 
                            ?>
                                <tr>
                                    <td><?= $peng->nm_pengumuman?></td>
                                    <td><?= $peng->tg_pengumuman?></td>
                                    <td>
                                        <?php
                                foreach($user as $usr): 
                                  if($peng->id_user == $usr->id_user):
                                    echo $usr->nama_user; 
                                  endif;
                                endforeach;
                              ?>
                                    </td>
                                    <td><?= $peng->jk_pengumuman?></td>
                                    <td><?= $peng->judul_pengumuman?></td>
                                    <td><a href="<?= base_url() ?>pengumuman/<?=$peng->nm_pengumuman?>/detail">Lihat</a>
                                    </td>
                                </tr>
                                <?php endforeach?>
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

