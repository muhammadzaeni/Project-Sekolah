<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<h1 class="title">Daftar Matakuliah</h1>
<form  method="post" action="?page=matakuliah_add_proses">
<table>
	<tr>
		<td width="200">Kode Matakuliah</td>
		<td></td>
		<td><input type="text" name="kode_matakuliah"></td>
	</tr>

	<tr>
		<td>Nama Matakuliah</td>
		<td></td>
		<td><input type="text" name="nama_matakuliah"></td>
	</tr>

	<tr>
		<td>Kode Prodi</td>
		<td></td>
		<td><input type="text" name="kdprodi"></td>
	</tr>

	<tr>
		<td>SKS</td>
		<td></td>
				<td>
					<select name="sks">
					<option value="2">2</option>
					<option value="3">3</option>
					</select>

	</tr>

	<tr>
		<td>Semester</td>
		<td></td>
		<td><input type="text" name="semester"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td></td>
					<td>
						<select name='aktif'>
						<option value='Aktif'>Aktif</option>
						<option value='Cuti'>Cuti </option>
						<option value='Tidak Aktif'>Tidak Aktif</option>
						
						</select>
						</td>
	</tr>

	<tr>
		<td></td>
		<td><button type="submit" name="simpan" value="simpan">Simpan </button></td>
		<td><button type="reset" value="reset">Reset </button></td>
	</tr>
</table>
</form>