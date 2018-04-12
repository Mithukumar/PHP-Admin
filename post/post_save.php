<?php
	require_once('../connect.php');

    $creat_post = $_POST['creat_post'];

	$query = mysql_query("insert into post values('','$creat_post')");

   header('location:../post_view.php');
?>