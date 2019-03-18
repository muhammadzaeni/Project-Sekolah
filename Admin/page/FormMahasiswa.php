<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<form  method="post" action="?page=formmahasiswa_proses">
<table>
<tr>
			<h3 class="menu-icon fa fa-laptop"> FORM MAHASISWA </h3>
</tr>
			<tr>
					<td>Nama</td>
					<td><input type='text' name='nama'></td>
			</tr>
			<tr>
					<td>NPM</td>
					<td><input type='text' name='npm'></td>
			</tr>
			<tr>
					<td>Jurusan</td>
					<td>
						<select name='jurusan'>
						<option value='Informatika'>INFORMATIKA </option>
						<option value='Sipil'> SIPIL </option>
						<option value='Industri'> INDUSTRI</option>
						</select>
					</td>
			</tr>
			 <tr>
					<td>Angkatan</td>
					<td>
						<select name='angkatan'>
						<option value='2018'>2018</option>
						<option value='2017'>2017 </option>
						<option value='2016'>2016</option>
						<option value='2015'>2015</option>
						<option value='2014'>2014</option>
						<option value='2013'>2013</option>
						<option value='2012'>2012</option>
						</select>
						</td>
			</tr>
	
	<tr>
		<td><button type="submit" name="simpan" value="simpan">Simpan</button></td>
	</tr>
	<tr>
		<td><button><a href="?page=mahasiswa">Kembali</a></button></td>
	</tr>

</table>
</form>
