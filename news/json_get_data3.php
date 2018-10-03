<?php

include('connection.php');

$offset_number = $_POST['offset_number'];
//$offset_number = '1';

$query = "SELECT id_announcement,tanggal_announcement,judul_announcement,gambar_announcement FROM `announcement` order by tanggal_announcement desc LIMIT 7 OFFSET $offset_number";

$result = mysqli_query($connect,$query);

$response = array();
while ($row = mysqli_fetch_array($result))
{
	array_push($response,array(
		"id_announcement"=>$row['id_announcement'],
		"tanggal_announcement"=>$row['tanggal_announcement'],
		"judul_announcement"=>$row['judul_announcement'],
		"gambar_announcement"=>$row['gambar_announcement']));
}

echo json_encode(array("server_response"=>$response));

mysqli_close($connect);
?>
