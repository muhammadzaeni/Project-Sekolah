<?php

require_once "koneksi.php";

class Login
{
	public $mysqli;

	function __construct()
	{
		$this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		session_start();

		$this->check_login();
	}

	function check_login()
	{

		if (isset($_POST['login'])) {
			$username = "";
			$password = "";

			if (empty($_POST['username']) || empty($_POST['password'])) {
				echo "<script>alert('Username or Password cannot be empty');</script>";
			} else {
			
			$username = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';

			$username = stripcslashes($username);
			$password = stripcslashes($password);
			$username = $this->mysqli->real_escape_string($username);
			$password = $this->mysqli->real_escape_string($password);
			$password = $password;

			$sql = "SELECT * FROM admin where username = '$username' AND password = '$password'";
			$result = $this->mysqli->query($sql);
			$rows = $result->num_rows;

				if ($rows == 1) {
					$_SESSION['username'] = $username;
					header("location:koneksi.php");
				} else {
					echo "<script>alert('Username or Password is invalid');</script>";
				}
			}
		} 

	}

}
