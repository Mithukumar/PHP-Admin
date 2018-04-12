<?php
	require_once('../connect.php');

 $title = $_POST['title'];
$detail = $_POST['detail'];

$query = mysql_query("insert into about values('','$title','$detail')");
header('location: ../about.php');

?>