<?php

	require_once("koneksi.php");
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

$edit =	mysqli_query($koneksi, "UPDATE dosen SET nidn='$nidn', nama='$nama', tempat_lhr='$tempat_lhr', tgl_lhr='$tgl_lhr', kota='$kota', kode_pos='$kode_pos', jk='$jk', status='$status', jengped='$jengped', basehomedos='$basehomedos', aktif='$aktif', keahlian='$keahlian', jafung='$jafung', pass='$pass' WHERE nidn='$nidn' ");

	if($edit){
		echo "data berhasil di edit";
	}else{
		echo "data gagal di edit";
	}
?>

<tr>
		<td><button><a href="?page=dosen">Kembali</a></button></td>
	</tr>