<?php
include("config.php");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$error=''; // Variable To Store Error Message
if (empty($_POST['uid'])) {
	$error = "User id is invalid";
	}
else{
	$uid=$_POST['uid'];
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "DELETE FROM `login` WHERE `Id`=".$uid;
	
	if (mysqli_query($conn, $sql)) {
		
		$level_alert="alert alert-success";
		$message_alert="User has been deleted successfully";
		
	} else {
		
		$level_alert="alert alert-danger";
		$message_alert="There was a problem!! User could not be deleted!!";
		
	}

	//mysqli_close($conn);

}	
?>		