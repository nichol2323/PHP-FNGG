<?php
	include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

	// id and timein
    $att_login_id = $data->att_login_id;
	$timein = $data->timein;

	// datenow
	$date = new DateTime('now', new DateTimeZone('Asia/Manila'));
	$datenow = $date->format('d-m-Y H:i:s');

	// convert to mins
	$start = strtotime($timein);
	$end = strtotime($datenow);
	$mins = ($end - $start) / 60;
	
	
	if($mins < 60){
		$out['error'] = true;
		$out['message'] = 'The minimum time are 1hour(60mins)';
		
	}
	if($mins >=60 ){
		$out['message'] = 'The maximum time are 8hour(480mins)';
		$sql1 = "UPDATE attendance SET timeout = '$datenow', total_min = $mins WHERE timein = '$timein' ";
		$sql = "DELETE FROM attendance_login WHERE att_login_id = '$att_login_id'";
	   $query1 = $conn->query($sql1);
		  $query = $conn->query($sql);
	   if($query1){
		   $out['message'] = 'Time Out Successfully';
	   }
	   else{
	   }
		if($query){
			$out['message'] = 'Time Out Successfully';
		}
		else{
			$out['error'] = true;
			$out['message'] = 'Cannot Time Out ';
		  }
	}
	if($mins >= 480){
		$mins = 480;
		
		$out['message'] = 'The maximum time are 8hour(480mins)';
		$sql1 = "UPDATE attendance SET timeout = '$datenow', total_min = $mins WHERE timein = '$timein' ";
		$sql = "DELETE FROM attendance_login WHERE att_login_id = '$att_login_id'";
	   $query1 = $conn->query($sql1);
		  $query = $conn->query($sql);
	   if($query1){
		   $out['message'] = 'Time Out Successfully';
	   }
	   else{
	   }
		if($query){
			$out['message'] = 'Time Out Successfully';
		}
		else{
			$out['error'] = true;
			$out['message'] = 'Cannot Time Out ';
		  }
	}
	
    echo json_encode($out);
