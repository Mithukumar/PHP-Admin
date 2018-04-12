<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("select * from icon where id = '$id'");

	$data = mysql_fetch_array($query);

	$image = $data['image'];

	unlink('../../assets/icon_img/'.$image);
	
	$query = mysql_query("delete from icon where id = '$id'");

	header('location: ../icon.php');

?>