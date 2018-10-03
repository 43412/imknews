<?php

include('connection.php');

$id_event = $_POST['id_event'];
//$id_event = '1';
$query = "SELECT id_event, tanggal_event, judul_event, gambar_event, dokumentasi_event1, keterangan_event1, dokumentasi_event2, keterangan_event2  FROM event where id_event = '$id_event'";

$result = mysqli_query($connect,$query);

$response = array();
while ($row = mysqli_fetch_array($result))

{
	array_push($response,array(
		"id_event"=>$row['id_event'],
		"tanggal_event"=>$row['tanggal_event'],
		"judul_event"=>$row['judul_event'],
		"gambar_event"=>$row['gambar_event'],
		"dokumentasi_event1"=>$row['dokumentasi_event1'],
		"keterangan_event1"=>$row['keterangan_event1'],
		"dokumentasi_event2"=>$row['dokumentasi_event2'],
		"keterangan_event2"=>$row['keterangan_event2']));
}

echo json_encode(array("server_response"=>$response));

mysqli_close($connect);

?>
