<?php

require_once('../connect.php');

$id = $_POST['id'];
$title = $_POST['title'];

$query = mysql_query("update footer set title = '$title' where id = '$id'");

header('location: ../footer.php');

?>