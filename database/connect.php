<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6417221";
$password = "c1fKjw8Vqw";
$dbname = "sql6417221";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error);
}
?>
