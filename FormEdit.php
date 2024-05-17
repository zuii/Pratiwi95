<?php
$nim=$_GET['nim'];
$sqldata="SELECT * FROM tblmhsw WHERE nim='$nim'";
require_once "KoneksiDB.php";
$query=mysqli_query($koneksi,$sqldata);
$data=mysqli_fetch_assoc($query);
?>
<h2>Update Data Mahasiswa</h2>
<form action="Update.php" method="POST">
    <label>Nomor Induk Mahasiswa :</label>
    <input type="text" name="nim" value="<?=$data['nim']?>"
    placeholder="Nomor Induk Mahasiswa" required>
    <br>
    <label>Nama Mahasiswa :</label>
    <input type="text" name="nama" id="nama" value="<?=$data['name']?>"
    placeholder="Nama Lengkap" required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">Program Studi :</label>
    <select name="prodi" id="prodi">
    <option value="<?=$data['prodi']?>" selected><?=$data['prodi']?></option>
    <option value="Sistem Informasi">Sistem Informasi</option>
    <option value="Sistem Komputer">Sistem Komputer</option>
    <option value="Teknik Informatika">Teknik Informatika</option>
    </select>
    <br>
    <label for="">Umur :</label>
    <input type="number" name="umur" id="umur" value="<?=$data['age']?>" required>
    <br>
    <button type="submit" name="kirim" value="Kirim">Update Data</button>
</form>