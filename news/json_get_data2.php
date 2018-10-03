<?php

include('connection.php');

$offset_number = $_POST['offset_number'];
//$offset_number = '0';

$query = "SELECT id_event,tanggal_event,judul_event,gambar_event FROM `event` order by tanggal_event desc LIMIT 7 OFFSET $offset_number";

$result = mysqli_query($connect,$query);

$response = array();
while ($row = mysqli_fetch_array($result))
{
	array_push($response,array(
		"id_event"=>$row['id_event'],
		"tanggal_event"=>$row['tanggal_event'],
		"judul_event"=>$row['judul_event'],
		"gambar_event"=>$row['gambar_event']));
}

echo json_encode(array("server_response"=>$response));

mysqli_close($connect);
?>
