<?php

	require_once('../connect.php');

	$id = $_GET['id'];
	$query = mysql_query("delete from about where id = '$id'");
	$_SESSION['msg'] == 'guuuuu';
	header('location: ../about.php');
?>