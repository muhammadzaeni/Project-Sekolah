<?php

	$content2 = 'Dashboard';

	if(isset($_GET['page']))
	{
		$content2 = $_GET['page'];
	}

	include 'page/'.$content2.'.php';

?>