<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("delete from service where id = '$id'");
	header('location: ../service.php');
?>