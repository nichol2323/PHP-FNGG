<?php
    include('conn.php');
    $data = json_decode(file_get_contents("php://input"));

    $out = array('error' => false);

    $project_id = $data->project_id;
    $name = $data->name;
    $qr_text = $data->qr_text;

    
    $sql = "UPDATE employee SET project_id = '$project_id', project_name = '$name' WHERE qr_text = '$qr_text' ";
    $query = $conn->query($sql);

    if($query){
        $out['message'] = 'Successfully';
    }
    else{
        $out['error'] = true;
        $out['message'] = 'Cannot ';
    }
        
    echo json_encode($out);
?>