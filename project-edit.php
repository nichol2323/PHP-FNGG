<?php
	include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

    $project_id = $data->project_id;
    $name = $data->name;
    $start_date = $data->start_date;
    $end_date = $data->end_date;
	$status = $data->status;

	$start_date = trim($start_date);
	$end_date = trim($end_date);

	$start_date = date('Y-m-d', strtotime($start_date));
	$end_date = date('Y-m-d', strtotime($end_date . ' +1 day'));

	$date = new DateTime('now', new DateTimeZone('Asia/Manila'));
    $datenow = $date->format('Y-m-d');

	
	if($status == "ACTIVE"){
		// QUERY FOR PROJECT
		$sql = "UPDATE project SET name = '$name', status = '$status', end_date = '$end_date' WHERE project_id = $project_id ";
		// QUERY FOR UPDATING PROJECT AND EMPLOYEE (PROJECT_ID AND PROJECT_NAME)
		$sql1 = "UPDATE project, employee SET project.name = '$name', project.status = '$status', employee.project_name = '$name' WHERE project.project_id = $project_id AND employee.project_id = $project_id";
		
		$query1 = $conn->query($sql1);
		$query = $conn->query($sql);
		if($query1){	
		}
		else{
			$out['error'] = true;
			$out['message'] = 'Cannot UPDATE Details';
		}
		if($query){
			   $out['message'] = ' Successfully UPDATE Details';
		}
		else{
			$out['error'] = true;
			$out['message'] = 'Cannot UPDATE Details';
		}
	}
	else if($status == "DONE"){
		$end_date = date('Y-m-d', strtotime($end_date . ' -2 day'));
		if($datenow <= $end_date ){
			$out['error'] = true;
			$out['message'] = 'Cannot UPDATE Status';
		}
		else{
			// QUERY FOR STATUS
			$sql = "UPDATE project SET status = '$status' WHERE project_id = $project_id ";
			//QUERY TO UPDATE EMPLOYEE PROJECT ID AND NAME
			$sql2 = "UPDATE employee SET project_id = 0, project_name = '' WHERE project_id = $project_id";
			
			$query = $conn->query($sql);
			$query2 = $conn->query($sql2);
			if($query){
				$out['message'] = ' Successfully UPDATE Details';
			}
			else{
				$out['error'] = true;
				$out['message'] = 'Cannot UPDATE Project';
			}
			if($query2){
				$out['message'] = ' Successfully UPDATE Details';
			}
			else{
				$out['error'] = true;
				$out['message'] = 'Cannot UPDATE Project Details';
			}
			
		}
	}
	else{
		$out['error'] = true;
		$out['message'] = 'Unknown Operation Please Contact Us';
	}


	
	


    echo json_encode($out);
?>