<?php
	include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

	$emp_id = $data->emp_id;
    $fname = $data->fname;
    $mname = $data->mname;
    $lname = $data->lname;
	$date_of_birth = $data->date_of_birth;
    $place_of_birth = $data->place_of_birth;
    $sex = $data->sex;
	$civil_status = $data->civil_status;
    $nationality = $data->nationality;
    $phone = $data->phone;
	$address = $data->address;
    $sss_id = $data->sss_id;
    $tin_id = $data->tin_id;
	$nbi_id = $data->nbi_id;

	$project_id = $data->project_id;
	$myvalue = $project_id;
	$arr = explode(' ',trim($myvalue));
	
    
   	$sql = "UPDATE employee SET fname = '$fname', mname = '$mname', lname = '$lname', date_of_birth = '$date_of_birth', place_of_birth = '$place_of_birth', sex = '$sex', civil_status = '$civil_status', nationality = '$nationality', phone = $phone, address = '$address', sss_id = $sss_id, tin_id = $tin_id, nbi_id = $nbi_id, project_id = $arr[0], project_name='$arr[1]' WHERE emp_id = '$emp_id'";
	   $query = $conn->query($sql);

   	if($query){
		$out['message'] = 'Employee updated Successfully';
   	}
   	else{
   		$out['error'] = true;
   		$out['message'] = 'Cannot update Employee';
   	}

    echo json_encode($out);
?>