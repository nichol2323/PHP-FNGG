<?php
	include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

    $project_id = $data->project_id;

	$no_projectid = 0;
	$no_projectname = '';

   	$sql = "DELETE FROM project WHERE project_id = $project_id";
	$sql1 = "UPDATE employee SET project_id = $no_projectid, project_name = '$no_projectname' WHERE project_id = $project_id";

	$query1 = $conn->query($sql1);
   	$query = $conn->query($sql);
	
	if($query1){
		$out['message'] = 'Project deleted Successfully';
	}
	else{

	}
   	if($query){
   		$out['message'] = 'Project deleted Successfully';
   	}
   	else{
   		$out['error'] = true;
   		$out['message'] = 'Cannot delete Project';
   	}

    echo json_encode($out);
?>