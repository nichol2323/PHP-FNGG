<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  $_SESSION['user_name'];
?>
<?php
	include('conn.php');
	
	$emp = $_SESSION['user_name'];

	$output = array();
	$sql = "SELECT * FROM payroll WHERE emp_name = '$emp'
	";
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