<?php

$conn = mysqli_connect('localhost', 'root', '', 'test_db');
$query = "SELECT * FROM `users`";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result)) {
	
	echo "".$row["id"]." ".$row["user_name"]." ".$row["password"]." ".$row["name"]."<br>";
}
?>