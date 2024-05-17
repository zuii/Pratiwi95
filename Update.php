<?php
require_once "KoneksiDB.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $prodi=$_POST['prodi'];
    $umur=$_POST['umur'];

    $sqlupdate="UPDATE tblmhsw SET name='$nama',
    address='$alamat', prodi='$prodi', age='$umur' WHERE nim='$nim'";
    if(mysqli_query($koneksi,$sqlupdate)){
        echo "<script> alert('Data sudah diupdate');
        window.location.assign('TampilData.php'); </script>";
    }
}