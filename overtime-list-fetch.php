<?php
	include('conn.php');
	
	$output = array();
	$sql = "SELECT * FROM attendance WHERE o_timein != '' ";
	$query=$conn->query($sql);
	while($row=$query->fetch_array()){
		$output[] = $row;
	}

	echo json_encode($output);
?>