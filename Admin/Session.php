<?php

require_once "koneksi.php";

class Session
{
	public $mysqli;
	public $login_user;

	function __construct()
	{
		session_start();
		$this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$this->check_session();
		$this->logout();
	}

	function check_session()
	{
		$user_check = $_SESSION['username'];

		$ses_sql = "SELECT * FROM login where username='$user_check'";
		$query = $this->mysqli->query($ses_sql);
		$row = $query->fetch_array(MYSQLI_BOTH);

		$this->login_user = $row['username'];

		if (!isset($user_check)) {
			header("location: index.php");
		}
	}

	function logout(){
		if (isset($_POST['logout'])) {
			session_destroy();
			header("location:index.php");
		}
	}
}
