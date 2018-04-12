<?php

	require_once('../connect.php');


	$photo = $_FILES['image']['name'];
	$parts = explode('.', $photo);
	$new_name = time().'.' .$parts[1];
	$address = '../../assets/logo_img/'.$new_name;

	move_uploaded_file($_FILES['image']['tmp_name'], $address);

	$query = mysql_query("insert into logo values('','$new_name')");
	header('location:../logo.php'); 

?>