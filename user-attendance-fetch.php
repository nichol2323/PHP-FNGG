<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	
?>
<?php

	include('conn.php');
	
	$output = array();

	$emp = $_SESSION['user_name'];
	
	$sql = "SELECT * FROM attendance WHERE emp_name = '$emp' ";
	$query=$conn->query($sql);
	while($row=$query->fetch_array()){
		$output[] = $row;
	}

	echo json_encode($output);
?>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>