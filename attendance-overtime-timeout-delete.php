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


if ($mins < 60) {
	$out['error'] = true;
	$out['message'] = 'The minimum time are 1hour(60mins)';
}
if ($mins >= 60 && $mins<=179) {
	$out['message'] = '';
	$sql1 = "UPDATE attendance SET o_timeout = '$datenow', o_total_min = $mins WHERE o_timein = '$timein' ";
	$sql = "DELETE FROM attendance_login WHERE att_login_id = '$att_login_id'";
	$query1 = $conn->query($sql1);
	$query = $conn->query($sql);
	if ($query1) {
		$out['message'] = 'Time Out Successfully';
	} else {
	}
	if ($query) {
		$out['message'] = 'Time Out Successfully';
	} else {
		$out['error'] = true;
		$out['message'] = 'Cannot Time Out ';
	}
}
if ($mins >= 180) {
	$mins = 180;

	$out['message'] = 'The maximum time are 3hour(180mins)';
	$sql1 = "UPDATE attendance SET o_timeout = '$datenow', o_total_min = $mins WHERE o_timein = '$timein' ";
	$sql = "DELETE FROM attendance_login WHERE att_login_id = '$att_login_id'";
	$query1 = $conn->query($sql1);
	$query = $conn->query($sql);
	if ($query1) {
		$out['message'] = 'Time Out Successfully';
	} else {
	}
	if ($query) {
		$out['message'] = 'Time Out Successfully';
	} else {
		$out['error'] = true;
		$out['message'] = 'Cannot Time Out ';
	}
}

echo json_encode($out);
