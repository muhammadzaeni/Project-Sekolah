<?php

require_once "Session.php";
$session = new Session();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>

<h1>Session</h1>

<p>Selamat Datang <?php echo $session->login_user;?></p>
<form method="POST" action=""><input type="submit" name="logout" value="LOGOUT"></form>

</body>
</html>

