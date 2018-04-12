<?php

require_once('../connect.php');

$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = mysql_query("update general set name = '$name',mobile = '$mobile',email = '$email',address = '$address' where id = '$id'");

// header('location: ../general.php');

?>