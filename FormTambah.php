<h2>Tambah Data Dosen</h2>
 <!-- tag form -->
<form action="Save.php" method="POST">
 <label>Nomor Induk Dosen Nasional :</label>
 <input type="text" name="nidn" placeholder="Nomor Induk Dosen Nasional" required>
 <br>
 <label>Nama Dosen :</label>
 <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
 <br>
 <label for="">Alamat :</label>
 <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
 <br>
 <label for="">matakuliah :</label>
 <select name="matakuliah" id="matakuliah">
    <option value="Web Programming" selected>Web Programming</option>
    <option value="Interaksi manusia dan komputer">Interaksi manusia dan komputer</option>
    <option value="Manajemen Basis data">Manajemen Basis Data</option>
    <option value="Kecakapan Antar Personal">Kecakapan Antar Personal</option>
    <option value="Analisis Proses Bisnis">Analisis Proses Bisnis</option>
    <option value="Pemmerograman Visual">Pemmerograman Visual</option>
    <option value="RPL">RPL</option>
 </select>
 <br>
 <label for="">Umur :</label>
 <input type="number" name="umur" id="umur" required>
 <br>
 <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>