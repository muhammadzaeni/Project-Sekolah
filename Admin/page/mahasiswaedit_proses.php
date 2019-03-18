<?php
require_once('koneksi.php');
$key = $_POST['key'];
$nama = $_POST ['nama'];
$npm = $_POST ['npm'];
$jurusan = $_POST ['jurusan'];
$angkatan = $_POST ['angkatan'];

$edit = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', npm='$npm', jurusan='$jurusan', angkatan='$angkatan' WHERE npm='$key'");
if($edit){
	echo 'data berhasil diedit';
}else{
	echo 'data gagal diedit';
}
?>