<?php
	include '/var/www/db.php';
	$sql = "select * from product_table";
	$result = $conn->query($sql);
	echo "<tbody>";
	while($row = $result->fetch_assoc()){
		if($row['id'] == $_GET['id']) {
			echo '<tr><td colspan="3"><form action="/api/update.php" method="POST">';
			echo '<input type="text" name="name" value="' . $row['name'] . '">';
			echo '<input type="text" name="price" value="' . $row['price'] . '">';
			echo '<a href="/"> <input type="button" value="Cancel" /></a>';
			echo '<input type="submit" value="Save">';
			echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
			echo "</form></td></tr>";
		}else if($row['id'] == $_GET['comment']) {
			echo '<tr><td colspan="3"><form action="/api/comment.php" method="POST">';
			echo '<input type="text" name="name" value="' . $row['name'] . '" disabled>';
			echo '<input type="text" name="comment" value="">';
			echo '<a href="/"> <input type="button" value="Cancel" /></a>';
			echo '<input type="submit" value="Comment">';
			echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
			echo "</form></td></tr>";
		}else{
			echo "<tr>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['price'] . "</td>";
			echo '<td><a href="/?id=' . $row['id'] . '">Update</a></td>';
			echo '<td><a href="/?comment=' . $row['id'] . '">Comment</a></td>';
			echo '<td><a href="/api/delete.php?id=' . $row['id'] . '">Delete</a></td>';
			echo "</tr>";
		}
	}
	echo "</tbody>";
	$conn->close();
?>