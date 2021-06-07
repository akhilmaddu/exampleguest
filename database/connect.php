<?php
$servername = "34.136.50.72";
$username = "root";
$password = "123";
$dbname = "guest";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error);
}
?>
