<?php 

	session_start();
	if (!isset($_SESSION['admin'])) 

	{

?>

		<script>

		alert("Tidak Ada Akses Halaman Silahkan Login Kembali!");

		</script>
		<meta http-equiv="refresh" content="0;  url=Login.php" >

<?php 

	exit();
	}
?>