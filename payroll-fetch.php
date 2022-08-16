<?php
	include('conn.php');
	
	$output = array();
	$sql = "SELECT emp_name, timein as date_start, timeout as date_end,sum(total_min)/60 as worktime, sum(o_total_min)/60 as overtime, sum(total_min+o_total_min)/60 as total, v1, v2, v3, v4 FROM attendance WHERE payroll_status = '' GROUP BY emp_name
	";
	$query=$conn->query($sql);
	while($row=$query->fetch_array()){
		$output[] = $row;
	}

	echo json_encode($output);
?>