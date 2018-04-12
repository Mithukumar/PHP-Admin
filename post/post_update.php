<?php

require_once('../connect.php');

$id = $_POST['id'];
$creat_post = $_POST['creat_post'];

$query = mysql_query("update post set creat_post = '$creat_post' where id = '$id'");

header('location: ../post_view.php');

?>