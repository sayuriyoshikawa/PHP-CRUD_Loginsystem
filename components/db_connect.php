<?php 

$hostname = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "food_delivery";

// create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

// check connection
if(mysqli_connect_error()) {
   die("Connection failed");
// }else {
//     echo "Successfully Connected";
}