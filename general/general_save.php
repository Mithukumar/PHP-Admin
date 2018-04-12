<?php
	require_once('../connect.php');

 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $address = $_POST['address'];
$query = mysql_query("insert into general values('','$name','$mobile','$email','$address')");
header('location: ../general.php');

?>