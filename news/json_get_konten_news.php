<?php

include('connection.php');

$id_news = $_GET['id'];
//$id_news = '11';

$query = "SELECT konten_news FROM news where id_news = '$id_news'";

$result = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($result);
$konten_news = $row['konten_news'];

mysqli_close($connect);

echo "<p style = 'color:#282828; font-family:calibri; text-align:justify;'>".$konten_news."</p>";

?>
