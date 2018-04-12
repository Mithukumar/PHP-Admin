<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("delete from footer where id = '$id'");
	 header('location: ../footer.php');
?>