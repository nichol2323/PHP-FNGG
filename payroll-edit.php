<?php
	include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

    $emp_name = $data->emp_name;
	$date_start = $data->date_start;
	$date_end = $data->date_end;
	$worktime = $data->worktime;
	$overtime = $data->overtime;
	$total = $data->total;

	$sss = $data->v1;
	$philhealth = $data->v2;
	$pagibig = $data->v3;
	$other = $data->v4;

	
	$total_deduction = $sss+$philhealth+$pagibig+$other;
	
	
	$gross_pay = $total*75;
	$net_pay = $gross_pay - $total_deduction;
	
	$date = new DateTime('now', new DateTimeZone('Asia/Manila'));
	$datenow = $date->format('d-m-Y H:i:s');

	
    // 
	// rate per employee 75 pesos 
	
   	$sql = "INSERT INTO payroll (emp_name, work_time, overtime, total_worktime, deduction, gross_pay, net_pay, date_create, starting_date, ending_date, sss_contribution, philhealth_contribution, pagibig_contribution, other_deduction) VALUES ('$emp_name', $worktime, $overtime, $total, $total_deduction, $gross_pay, $net_pay, '$datenow', '$date_start', '$date_end', $sss, $philhealth, $pagibig, $other)";
	$sql1 = "UPDATE attendance SET payroll_status = 'checked' WHERE emp_name = '$emp_name'";

	if($sss == 0 or $philhealth == 0 or $pagibig == 0){
		$out['error'] = true;
		$out['message'] = 'Contribution(s) are required';
		
	}
	else{
		$query = $conn->query($sql);
		$query1 = $conn->query($sql1);
	
		   if($query){
			   $out['message'] = 'Successfully';
		   }
		   else{
			   $out['error'] = true;
			   $out['message'] = 'Error';
		   }
		if($query1){
			$out['message'] = 'Successfully';
		}
		else{
			$out['error'] = true;
			$out['message'] = 'Error';
		}
	}
   	

    echo json_encode($out);
?>