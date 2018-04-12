<?php
	require_once('../connect.php');

    $title = $_POST['title'];

	$query = mysql_query("insert into footer values('','$title')");

   header('location:../footer.php');
?>