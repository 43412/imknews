<?php
require "connection.php";
$nama = "johnny";
$pass = "serah";

$sql_query = "SELECT * FROM news_event order by desc id;
$result = mysqli_query($connect,$sql_query);

if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_assoc($result);
$passwot = $row["username"];
echo "<center><h2>Selamat Datang, ".$passwot." !!</h2></center>";
}else{
echo "Login Gagal !";
}
?>
