<?php
require_once "KoneksiDB.php";
$nim=$_GET['nim'];
$delete="DELETE FROM tblmhsw WHERE nim='$nim'";
if(mysqli_query($koneksi,$delete)){
    echo "<script> alert('Data sudah dihapus');
    window.location.assign('TampilData.php'); </script>";
}else{
    echo "<script> alert('Data gagal dihapus');
    window.location.assign('TampilData.php'); </script>";
}