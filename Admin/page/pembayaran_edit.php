<?php
require_once('koneksi.php');
 $npmpembayaran = $_GET['npmpembayaran'];

 $sql = mysqli_query($koneksi, "SELECT npm, b_sks, val_sks, dpp, b_kp, b_ta, b_uts_uas, b_praktikum, b_lain, tunggakan, total, semester, thn_ajar FROM bayar where npm='$npmpembayaran'");

 $data= mysqli_fetch_array($sql);
?>


<form  method="post" action="?page=pembayaran_edit_proses">
<table>
	<tr>
		<td width="150" height="35">NPM</td>
		<td>:</td>
		<td><input type="text" name="npm" value="<?php echo $data['npm'];?>"></td>
	</tr>

	<tr>
		<td height="35">Biaya SKS</td>
		<td>:</td>
		<td><input type="text" name="b_sks" value="<?php echo $data['b_sks'];?>"></td>
	</tr>

	<tr>
		<td height="35"> Val_SKS</td>
		<td>:</td>
		<td><input type="text" name="val_sks" value="<?php echo $data['val_sks'];?>"></td>
	</tr>

	<tr>
		<td height="35">DPP</td>
		<td>:</td>
		<td><input type="text" name="dpp" value="<?php echo $data['dpp'];?>"></td>
	</tr>

	<tr>
		<td height="35">KP</td>
		<td>:</td>
		<td><input type="text" name="b_kp" value="<?php echo $data['b_kp'];?>"></td>
	</tr>

	<tr>
		<td height="35">TA</td>
		<td>:</td>
		<td><input type="text" name="b_ta" value="<?php echo $data['b_ta'];?>"></td>
	</tr>

	<tr>
		<td height="35">UAS dan UTS</td>
		<td>:</td>
		<td><input type="text" name="b_uts_uas" value="<?php echo $data['b_uts_uas'];?>"></td>
	</tr>

	<tr>
		<td height="35">Praktikum</td>
		<td>:</td>
		<td><input type="text" name="b_praktikum" value="<?php echo $data['b_praktikum'];?>"></td>
	</tr>

	<tr>
		<td height="35">Lain-Lain</td>
		<td>:</td>
		<td><input type="text" name="b_lain" value="<?php echo $data['b_lain'];?>"></td>
	</tr>

	<tr>
		<td height="35">Tunggakan</td>
		<td>:</td>
		<td><input type="text" name="tunggakan" value="<?php echo $data['tunggakan'];?>"></td>
	</tr>

	<tr>
		<td height="35">Total</td>
		<td>:</td>
		<td><input type="text" name="total" value="<?php echo $data['total'];?>"></td>
	</tr>

	<tr>
		<td height="35">Semester</td>
		<td>:</td>
		<td><input type="text" name="semester" value="<?php echo $data['semester'];?>"></td>
	</tr>

	<tr>
		<td height="35">Tahun Ajar</td>
		<td>:</td>
		<td><input type="text" name="thn_ajar" value="<?php echo $data['thn_ajar'];?>"></td>
	</tr>

	<tr>
		<td height="50"><input type="submit" name="simpan" value="SIMPAN"></td>
	</tr>
</table>
</form>