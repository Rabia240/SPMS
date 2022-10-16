<?php

$servername = "localhost";
$username = "root";
$password ="";
$database = "demo";

$connection = mysqli_connect($servername, $username, $password, $database);



if($connection){
	echo "Connected";
}

else{
	echo "Not Connected";
}
$query = "select * from login";
$execute = mysqli_query($connection, $query);
if($execute){
	echo "<br>";
}
print_r($execute);








?>