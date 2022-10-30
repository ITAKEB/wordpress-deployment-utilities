<?php
	include '/var/www/db.php';
	$id = $_POST['id'];
	$comment = $_POST['comment'];
	$sql = "insert into comment_table (comment, p_id) values ('$comment', '$id')";
	$conn->query($sql);
	$conn->close();
	header("location: /");
?>