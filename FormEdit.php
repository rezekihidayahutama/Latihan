<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
<?php
    $nidn=$_GET['nidn'];
    //membuat sql tampil data
    $sqldata="SELECT * FROM tblmhsw WHERE nidn='$nidn'";
    //ambil koneksi data
    require_once "KoneksiDB.php";
    //proses sql
    $query=mysqli_query($koneksi,$sqldata);
    //mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
    $data=mysqli_fetch_assoc($query);
    //selanjutnya tampilkan pada field dibawah.
?>
 <h2>Update Data Dosen</h2>
 <!-- tag form -->
 <form action="Update.php" method="POST">
    <label>Nomor Induk Dosen Nasional :</label>
    <input type="text" name="nidn" value="<?=$data['nidn']?>" placeholder="Nomor Induk Dosen Nasional" required>
    <br>
    <label>Nama Mahasiswa :</label>
    <input type="text" name="nama" id="nama" value="<?=$data['name']?>" placeholder="Nama Lengkap" required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">matakuliah :</label>
    <select name="matakuliah" id="matakuliah">
        <option value="<?=$data['matakuliah']?>" selected><?=$data['matakuliah']?></option>
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
    <input type="number" name="umur" id="umur" value="<?=$data['age']?>" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Update Data</button>
 </form>