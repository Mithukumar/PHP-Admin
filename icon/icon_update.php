<?php

	require_once('../connect.php');

	$hidden_id = $_POST['id'];

	$query = mysql_query("select * from icon where id = '$hidden_id'");

	$data = mysql_fetch_array($query);
	$image = $data['image'];

	if ($_FILES['image']['name'] && empty($image)) {
	$photo = $_FILES['image']['name'];
	$parts = explode('.', $photo);
	$new_name = time().rand().'.'.$parts[1];
	$address = '../../assets/icon_img/'.$new_name;
	move_uploaded_file($_FILES['image']['tmp_name'],$address);


	}elseif ($_FILES['image']['name'] && !empty($image)) {
		unlink('../../assets/icon_img/'.$image);
		$photo = $_FILES['image']['name'];
	$parts = explode('.', $photo);
	$new_name = time().rand().'.'.$parts[1];
	$address = '../../assets/icon_img/'.$new_name;
	move_uploaded_file($_FILES['image']['tmp_name'],$address);


	}elseif (!$_FILES['image']['name'] && !empty($image)) {
		$new_name = $image;
	}

	$query = mysql_query("update icon set image = '$new_name' where id = '$hidden_id'");

header('location:../icon.php');
?>