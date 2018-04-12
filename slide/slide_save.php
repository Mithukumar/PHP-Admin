<?php

	require_once('../connect.php');

	 $title = $_POST['title'];

	$photo = $_FILES['image']['name'];
	$parts = explode('.', $photo);
	$new_name = time().'.' .$parts[1];
	$address = '../../assets/image/'.$new_name;

	move_uploaded_file($_FILES['image']['tmp_name'], $address);

	$query = mysql_query("insert into slide values('','$title','$new_name')");
	header('location:../slide_view.php'); 

?>