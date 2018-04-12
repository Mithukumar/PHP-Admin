<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("select * from slide where id = '$id'");

	$data = mysql_fetch_array($query);

	$image = $data['image'];

	unlink('../../assets/image/'.$image);
	
	$query = mysql_query("delete from slide where id = '$id'");

	header('location: ../slide_view.php');

?>