<?php
session_start();
include 'connection.php';
$uname = $_POST['uname'];
$password = $_POST['pass'];
$sql = "INSERT INTO `login`(`uname`, `pass`) VALUES (['$uname'],['$password'])";
if(mysqli_query($con,$sql)){
	echo "<Script>alert('Enjoy the learning')</script>";
	header('location:user.html');
}
?>