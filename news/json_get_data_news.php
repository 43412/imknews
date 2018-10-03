<?php

include('connection.php');

$id_news = $_POST['id_news'];
//$id_news = '10';

$query = "SELECT id_news, tanggal_news, judul_news, gambar_news, dokumentasi_news1, keterangan_news1, dokumentasi_news2, keterangan_news2 FROM news where id_news = '$id_news'";

$result = mysqli_query($connect,$query);

$response = array();
while ($row = mysqli_fetch_array($result))

{
	array_push($response,array(
		"id_news"=>$row['id_news'],
		"tanggal_news"=>$row['tanggal_news'],
		"judul_news"=>$row['judul_news'],
		"gambar_news"=>$row['gambar_news'],
		"dokumentasi_news1"=>$row['dokumentasi_news1'],
		"keterangan_news1"=>$row['keterangan_news1'],
		"dokumentasi_news2"=>$row['dokumentasi_news2'],
		"keterangan_news2"=>$row['keterangan_news2']));
}

echo json_encode(array("server_response"=>$response));

mysqli_close($connect);

?>
