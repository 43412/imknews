<?php

include('connection.php');

$id_announcement = $_GET['id'];
//$id_announcement = '2';

$query = "SELECT konten_announcement FROM announcement where id_announcement = '$id_announcement'";

$result = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($result);
$konten_announcement = $row['konten_announcement'];

mysqli_close($connect);
echo "<p style = 'color:#282828; font-family:calibri; text-align:justify;'>".$konten_announcement."</p>";

?>
