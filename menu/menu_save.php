<?php
	require_once('../connect.php');

    $menu_name = $_POST['menu_name'];

	$query = mysql_query("insert into menu values('','$menu_name')");

   header('location:../menu.php');
?>