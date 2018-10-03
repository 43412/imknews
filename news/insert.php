<?php
require"connection.php";
$nama="root";
$pass="";

$sql_query = "INSERT INTO login (username,password) VALUES('$nama','$pass')";

if(mysqli_query($connect,$sql_query)){
	echo"<br>Data Berhasil Dimasukkan";
	} else{
	echo"<br>Data Gagal Dimasukkan : ".mysqli_error($connect);
	}

?>
