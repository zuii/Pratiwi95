<h2>Tambah Data Mahasiswa</h2>
<form action="Save.php" method="POST">
    <label>Nomor Induk Mahasiswa :</label>
    <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" required>
    <br>
    <label>Nama Mahasiswa :</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">Program Studi :</label>
    <select name="prodi" id="prodi">
        <option value="Sistem Informasi selected">Sistem Informasi</option>
        <option value="Sistem Komputer">Sistem Komputer</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
    </select>
    <br>
    <label for="">Umur :</label>
    <input type="number" name="umur" id="umur" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>