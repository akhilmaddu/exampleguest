<?php
$servername = "remotemysql.com";
$username = "kmmItrykw0";
$password = "nFu6I7S8gV";
$dbname = "kmmItrykw0";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error);
}
?>
