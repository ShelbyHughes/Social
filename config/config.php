<?php
ob_start(); //Turns on output buffering 

$timezone = date_default_timezone_set("Europe/London");
session_start();
$con = mysqli_connect("localhost", "root", "", "social");

if(mysqli_connect_errno()){
	echo "Failed to connect: " . mysqli_connect_errno();
}
 ?>