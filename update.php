<?php
	include '/var/www/db.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$sql = "update product_table set name='$name', price='$price' where id=$id";
	$result = $conn->query($sql);
	$conn->close();
	header("location: /");
?>