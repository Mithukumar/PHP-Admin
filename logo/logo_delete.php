<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("select * from logo where id = '$id'");

	$data = mysql_fetch_array($query);

	$image = $data['image'];

	unlink('../../assets/logo_img/'.$image);
	
	$query = mysql_query("delete from logo where id = '$id'");

	header('location: ../logo.php');

?>