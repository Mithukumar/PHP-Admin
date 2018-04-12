<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("delete from post where id = '$id'");
	 header('location: ../post.php');
?>