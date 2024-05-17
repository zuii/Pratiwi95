<?php
require_once "KoneksiDB.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $prodi=$_POST['prodi'];
    $umur=$_POST['umur'];
    $sqlsave="INSERT INTO tblmhsw VALUES
    ('$nim','$nama','$alamat','$prodi','$umur')";
    if(mysqli_query($koneksi,$sqlsave)){
        echo "<script> alert('Data sudah disimpan');
        window.location.assign('TampilData.php'); </script>";
    }
}