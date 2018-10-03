<?php

include('connection.php');

$query = "SELECT * FROM `news` order by id_news desc;";

$result = mysqli_query($connect,$query);

$response = array();
while ($row = mysqli_fetch_array($result))
{
	array_push($response,array(
		"id_news"=>$row['id_news'],
		"tanggal_news"=>$row['tanggal_news'],
		"judul_news"=>$row['judul_news'],
			"konten_news"=>$row['konten_news'],
		"gambar_news"=>$row['gambar_news']));
}

echo json_encode(array("server_response"=>$response));

mysqli_close($connect);

?>
