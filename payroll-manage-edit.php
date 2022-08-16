<?php
	include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

    $payroll_id = $data->payroll_id;
	
	
	$date = new DateTime('now', new DateTimeZone('Asia/Manila'));
	$datenow = $date->format('d-m-Y H:i:s');


   	$sql = "UPDATE payroll SET payroll_status = 'paid' WHERE payroll_id = $payroll_id";

   	$query = $conn->query($sql);


   	if($query){
   		$out['message'] = 'Successfully';
   	}
   	else{
   		$out['error'] = true;
   		$out['message'] = 'Error';
   	}

    echo json_encode($out);
?>