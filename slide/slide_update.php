<?php

	require_once('../connect.php');

	$title = $_POST['title'];
	$hidden_id = $_POST['id'];

	$query = mysql_query("select * from slide where id = '$hidden_id'");

	$data = mysql_fetch_array($query);
	$image = $data['image'];

	if ($_FILES['image']['name'] && empty($image)) {
	$photo = $_FILES['image']['name'];
	$parts = explode('.', $photo);
	$new_name = time().rand().'.'.$parts[1];
	$address = '../../assets/image/'.$new_name;
	move_uploaded_file($_FILES['image']['tmp_name'],$address);


	}elseif ($_FILES['image']['name'] && !empty($image)) {
		unlink('../../assets/image/'.$image);
		$photo = $_FILES['image']['name'];
	$parts = explode('.', $photo);
	$new_name = time().rand().'.'.$parts[1];
	$address = '../../assets/image/'.$new_name;
	move_uploaded_file($_FILES['image']['tmp_name'],$address);


	}elseif (!$_FILES['image']['name'] && !empty($image)) {
		$new_name = $image;
	}

	$query = mysql_query("update slide set title = '$title', image = '$new_name' where id = '$hidden_id'");

header('location:../slide_view.php');
?>