<?php
if($_SESSION["aezakmi"] == ""){
    echo "<script>document.location.href='../index.php';</script>";
}
$gusta1 = "SELECT * FROM `tb_user` WHERE `id_user` = '$_SESSION[aezakmi]'";
$gusta2 = $conn->query( $gusta1 );
$gusta3 = $gusta2->fetch_array();

?>