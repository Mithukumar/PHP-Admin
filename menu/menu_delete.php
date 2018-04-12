<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("delete from menu where id = '$id'");
	 header('location: ../menu.php');
?>