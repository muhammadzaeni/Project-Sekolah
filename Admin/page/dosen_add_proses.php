<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
require_once('koneksi.php');
 $nidn = $_POST['nidn'];
 $nama = $_POST['nama'];
 $tempat_lhr = $_POST['tempat_lhr'];
 $tgl_lhr = $_POST['tgl_lhr'];
 $kota = $_POST['kota'];
 $kode_pos = $_POST['kode_pos'];
 $jk = $_POST['jk'];
 $status = $_POST['status'];
 $jengped = $_POST['jengped'];
 $basehomedos = $_POST['basehomedos'];
 $aktif = $_POST['aktif'];
 $keahlian = $_POST['keahlian'];
 $jafung = $_POST['jafung'];
 $pass = $_POST['pass'];

 $insert = mysqli_query($koneksi, "INSERT INTO dosen (nidn, nama, tempat_lhr, tgl_lhr, kota, kode_pos, jk, status, jengped, basehomedos, aktif, keahlian, jafung, pass) VALUES ('$nidn', '$nama', '$tempat_lhr','$tgl_lhr', '$kota',  '$kode_pos', '$jk', '$status', '$jengped', '$basehomedos', '$aktif', '$keahlian', '$jafung', '$pass') ");

 if ($insert)
 {
 	echo '1 data berhasil ditambahkan';
 }else{
 	echo ' data gagal ditambahkan';
 }
 ?>

 <a href="?page=dosen"><button>Kembali</button></a>