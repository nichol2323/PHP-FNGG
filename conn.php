<?php
	$conn = new mysqli('localhost', 'root', '', 'fngg');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>