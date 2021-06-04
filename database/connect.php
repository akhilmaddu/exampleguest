<?php
$servername = "remotemysql.com";
$username = "30ItOgenKE";
$password = nF200xrDQl;
$dbname = "30ItOgenKE";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error);
}
?>
