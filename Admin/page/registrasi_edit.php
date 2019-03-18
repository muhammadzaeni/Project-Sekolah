<?php

	require_once("koneksi.php");
	
	 $npmregis= $_GET['npmregis'];

	 $sql = mysqli_query($koneksi, "SELECT npm, semester, nilai, flag, nokwitansi FROM registrasi WHERE npm= '$npmregis' ");
	 $data= mysqli_fetch_array($sql);
?>
<h1 class="title">Edit program study</h1>
<form method="post" action="?page=registrasi_edit_proses">
	
<table>
	<tr>
		<td>NPM</td><td>:</td><td><input type="text" name="npm" value= "<?php echo $data['npm'];?>"></td>
	</tr>
	<tr>
		<td>semester</td><td>:</td><td><input type="text" name="semester" value= "<?php echo $data['semester'];?>"></td>
	</tr>
	<tr>
		<td>Nilai</td><td>:</td><td><input type="text" name="nilai" value= "<?php echo $data['nilai'];?>"></td>
	</tr>
	<tr>
		<td>Flag</td><td>:</td><td><input type="text" name="flag" value= "<?php echo $data['flag'];?>"></td>
	</tr>
	<tr>
		<td>No Kwitansi</td><td>:</td><td><input type="text" name="nokwitansi" value= "<?php echo $data['nokwitansi'];?>"></td>
	</tr>	

</table>
<button type="submit" value="submit">Simpan</button>

</form>