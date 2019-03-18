<?php

	require_once("koneksi.php");
	$npm	= $_POST['npm'];
	$semester= $_POST['semester'];
	$nilai= $_POST['nilai'];
	$flag= $_POST['flag'];
	$nokwitansi= $_POST['nokwitansi'];


$edit =	mysqli_query($koneksi, "UPDATE registrasi SET npm='$npm', semester='$semester', nilai='$nilai',flag='$flag', nokwitansi='nokwitansi' WHERE npm='$npm' ");

	if($edit){
		echo "data berhasil di edit";
	}else{
		echo "data gagal di edit";
	}
?>

<tr>
		<td><button><a href="?page=registrasi">Kembali</a></button></td>
	</tr>