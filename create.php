<?php
	include '/var/www/db.php';
	$name = $_POST["name"];
	$price = $_POST["price"];
	$sql = "insert into product_table (name, price) values ('$name', '$price')";
	$conn->query($sql);
	$conn->close();
?>