<?php 
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "Musical+1937";
$dbName = "hostel_allocation";

$connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$connect){
    die("Failed to connect");
}

