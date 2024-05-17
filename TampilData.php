<?php
include "KoneksiDB.php";
$sqltampil = "SELECT * FROM tblmhsw";
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1;
?>

<h2>Data Mahasiswa STMIK Royal</h2>
<a href="FormTambah.php">Tambah Data</a>

<table width="100%" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>

<tbody>
<?php
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $nomor ?></td>
    <td><?= $data['nim'] ?></td>
    <td><?= $data['name'] ?></td>
    <td><?= $data['address'] ?></td>
    <td><?= $data['prodi'] ?></td>
    <td><?= $data['age'] ?></td>
    <td>
        <a href="FormEdit.php?nim=<?=$data['nim']?>"> Edit</a> | <a href="Delete.php?nim=<?=$data['nim']?>">Delete</a>
    </td>
</tr>
<?php $nomor++;
}?>
</tbody>
</table>