<?php

require_once('../connect.php');

$id = $_POST['id'];
$menu_name = $_POST['menu_name'];

$query = mysql_query("update menu set menu_name = '$menu_name' where id = '$id'");

header('location: ../menu.php');

?>