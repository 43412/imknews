<?php
include('connection.php');

$offset_number = $_POST['offset_number'];
//$offset_number = '2';

$query = "SELECT id_news,tanggal_news,judul_news,gambar_news FROM `news` order by tanggal_news desc LIMIT 7 OFFSET $offset_number";

$result = mysqli_query($connect,$query);

$response = array();
while ($row = mysqli_fetch_array($result))
{
	array_push($response,array(
		"id_news"=>$row['id_news'],
		"tanggal_news"=>$row['tanggal_news'],
		"judul_news"=>$row['judul_news'],
		"gambar_news"=>$row['gambar_news']));
}

echo json_encode(array("server_response"=>$response));

mysqli_close($connect);
?>
