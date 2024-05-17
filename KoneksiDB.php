<?php
$host='localhost';
$user='root';
$pwd='';
$namadb='dbonline';
$koneksi=mysqli_connect($host,$user,$pwd,$namadb);
if(!$koneksi){
    echo"<script> alert('Database tidak terhubung !!!'); </script>";
}
?>