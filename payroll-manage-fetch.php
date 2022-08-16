<?php
	include('conn.php');
	
	$output = array();
	$sql = "SELECT * FROM payroll WHERE payroll_status= '' 
	";
	$query=$conn->query($sql);
	while($row=$query->fetch_array()){
		$output[] = $row;
	}

	echo json_encode($output);
?>