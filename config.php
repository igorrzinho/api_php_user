<?php
$host="localhost";
$username = "root";
$password="usbw";
$database = "API_DATA";
$con = mysqli_connect(    $host, $username, $password, $database);
if (!$con){
    echo "Connection failed";
}
?>