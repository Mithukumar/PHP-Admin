<?php

require_once('../connect.php');

$id = $_POST['id'];
$title = $_POST['title'];
$detail = $_POST['detail'];

$query = mysql_query("update about set title = '$title',detail = '$detail' where id = '$id'");

header('location: ../about.php');

?>