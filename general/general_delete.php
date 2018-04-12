<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("delete from general where id = '$id'");
	header('location: ../general.php');
?>