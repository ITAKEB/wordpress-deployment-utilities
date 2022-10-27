<?php
	include '/var/www/db.php';
	$id = $_GET['id'];
	$sql = "delete from product_table where id=$id";
	$conn->query($sql);
	$conn->close();
	header("location: /");
?>