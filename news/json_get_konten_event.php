<?php

include('connection.php');

$id_event = $_GET['id'];
//$id_event = '1';

$query = "SELECT konten_event FROM event where id_event = '$id_event'";

$result = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($result);
$konten_event = $row['konten_event'];

mysqli_close($connect);

echo "<p style = 'color:#282828; font-family:calibri; text-align:justify;'>".$konten_event."</p>";

?>
