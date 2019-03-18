<?php
require_once('koneksi.php');
 $npm = $_POST['npm'];
 $b_sks = $_POST['b_sks'];
 $val_sks = $_POST['val_sks'];
 $dpp = $_POST['dpp'];
 $b_kp = $_POST['b_kp'];
 $b_ta = $_POST['b_ta'];
 $b_uts_uas = $_POST['b_uts_uas'];
 $b_praktikum = $_POST['b_praktikum'];
 $b_lain = $_POST['b_lain'];
 $tunggakan = $_POST['tunggakan'];
 $total = $_POST['total'];
 $semester = $_POST['semester'];
 $thn_ajar = $_POST['thn_ajar'];


$edit = mysqli_query($koneksi, "UPDATE bayar SET npm='$npm', b_sks='$b_sks', val_sks='$val_sks', dpp='$dpp', b_kp='$b_kp', b_ta='$b_ta', b_uts_uas='$b_uts_uas', b_praktikum='$b_praktikum', b_lain='$b_lain', tunggakan='$tunggakan', total='$total', semester='$semester', thn_ajar='$thn_ajar' WHERE npm='$npm'");

if($edit){
	echo "data berhasil diedit";
}else{
	echo "data gagal diedit";
}
?>
	<tr>
		<td><button><a href="?page=pembayaran">Kembali</a></button></td>
	</tr>
