<?php
include "admin/koneksi.php";
$sql3 = "SELECT COUNT(*) as jumlah FROM information_schema.tables WHERE table_schema = '$dbname'";
$result3 = $conn->query( $sql3 );
$row3 = $result3->fetch_array();
if($row3[0] == 4){
    echo "<script>document.location.href='pengumuman_home.php?ofset=0';</script>";
}else{
    $perintah="CREATE TABLE `tb_pengumuman` (  `nm_pengumuman` varchar(15) NOT NULL PRIMARY KEY,  `tg_pengumuman` date NOT NULL,  `judul_pengumuman` text NOT NULL,  `jk_pengumuman` varchar(15) NOT NULL,  `id_user` varchar(15) NOT NULL,  `isi_pengumuman` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $conn->query($perintah) === TRUE;
    $perintah = "CREATE TABLE `tb_surat_keluar` (  `nm_sr_luar` varchar(15) NOT NULL PRIMARY KEY,  `tg_sr_luar_bt` date NOT NULL,  `tg_sr_luar_lk` date NOT NULL,  `perihal_luar` varchar(30) NOT NULL,  `judul_luar` varchar(30) NOT NULL,  `jk_luar` varchar(15) NOT NULL,  `pembuat_sr_luar` varchar(30) NOT NULL,  `penerima_sr_luar` varchar(30) NOT NULL,  `dok_luar` text NOT NULL,  `id_user` varchar(15) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $conn->query($perintah) === TRUE;
    $perintah = "CREATE TABLE `tb_surat_masuk` (  `nm_sr_masuk` varchar(15) NOT NULL PRIMARY KEY,  `tg_sr_masuk` date NOT NULL,  `tg_sr_masuk_dt` date NOT NULL,  `perihal_masuk` varchar(30) NOT NULL,  `judul_masuk` varchar(30) NOT NULL,  `pengirim_masuk` varchar(30) NOT NULL,  `jk_masuk` varchar(15) NOT NULL,  `penerima_masuk` varchar(30) NOT NULL,  `dok_msk` text NOT NULL,  `id_user` varchar(15) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $conn->query($perintah) === TRUE;
    $perintah = "CREATE TABLE `tb_user` (  `id_user` varchar(15) NOT NULL PRIMARY KEY,  `nama_user` varchar(30) NOT NULL,  `no.hp` varchar(15) NOT NULL,  `email` varchar(30) NOT NULL,  `alamat` varchar(50) NOT NULL,  `username` varchar(15) NOT NULL,  `password` varchar(20) NOT NULL,  `foto_user` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    $conn->query($perintah) === TRUE;
    $perintah = "INSERT INTO `tb_user` (`id_user`, `nama_user`, `no.hp`, `email`, `alamat`, `username`, `password`, `foto_user`) VALUES ('admin', 'admin', '0', 'admin', 'admin', 'admin', 'admin', 'admin');";
    $conn->query($perintah) === TRUE;
    echo "<script>document.location.href='pengumuman_home.php?ofset=0';</script>";
}

?>
