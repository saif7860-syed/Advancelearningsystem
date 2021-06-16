<?php
session_start();
include "connection.php";
if(isset($_POST['updatebtn']))
{
	$uname = $_POST['edit_uname'];
	$mob = $_POST['edit_mob'];
	$email = $_POST['edit_email'];
	$query = "UPDATE signup SET uname='$uname', email='$mob', pass = '$email'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
       $_SESSION['success'] = "Your data is updated";
       header('register_edit.php');
    }
    else{
           $_SESSION['status'] = "Your data is not updated";
           header('register_edit.php');
    }
}

?>