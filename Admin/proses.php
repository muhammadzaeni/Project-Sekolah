<?php
	session_start();
	require_once('koneksi.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query 	= mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");  
	//mengambil 1 baris dari sekumpulan baris
	$sql 	= mysqli_fetch_row($query);

	if(!$sql){ 
?>

	<script>
		alert('username dan password yang anda masukan salah');
		</script>
		
	<meta http-equiv="refresh" content="0; url=index.php">

<?php

	}else
	{
		$_SESSION['admin']=$password;
	header('location:Home.php');
	}
	

?>