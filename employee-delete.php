<?php
	include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

    $emp_id = $data->emp_id;

   	$sql = "DELETE FROM employee WHERE emp_id = '$emp_id'";
   	$query = $conn->query($sql);

   	if($query){
   		$out['message'] = 'Employee deleted Successfully';
   	}
   	else{
   		$out['error'] = true;
   		$out['message'] = 'Cannot delete Employee';
   	}

    echo json_encode($out);
?>