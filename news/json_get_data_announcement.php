<?php

include('connection.php');

$id_announcement = $_POST['id_announcement'];
//$id_announcement = '1';
//$query = "SELECT id_news, tanggal_news, judul_news, konten_news, gambar_news FROM news where id_news = '$id_news'";
$query = "SELECT id_announcement, tanggal_announcement, judul_announcement, gambar_announcement FROM announcement where id_announcement = '$id_announcement'";

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
