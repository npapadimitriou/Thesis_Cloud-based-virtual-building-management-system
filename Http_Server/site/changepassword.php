<?php
include("config.php");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$error=''; // Variable To Store Error Message
if (empty($_POST['curpswd']) || empty($_POST['newpswd'])||empty($_POST['newpswd2'])) {
	$error = "Old password or New password is invalid";
	}
	else{
		$currentpass=$_POST['curpswd'];
		$newpass=$_POST['newpswd'];
		$newpass2=$_POST['newpswd2'];	
		$loggedinuser=$_SESSION['login_user'];		
	
		if($currentpass==$_SESSION['login_password']){
			if($newpass==$newpass2){
				if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
				$_SESSION['bad_changepass_error']=1;	
				}
				$sql = "UPDATE login SET password='$newpass' WHERE username='$loggedinuser'";
				
				if (mysqli_query($conn, $sql)) {

					$level_alert="alert alert-success";
					$message_alert="Password has been changed successfully";
					
					
				} else {
					
					$level_alert="alert alert-danger";
					$message_alert="There was a problem!! Password could not be changed!!";

					$_SESSION['bad_changepass_error']=1;
				}

				//mysqli_close($conn);



				
				
			}
			else{
			$_SESSION['error_diff_new_pass']=1;	
				
			}
			
		}
		else{
			$_SESSION['error_curr_pass']=1;	
			
		}
	}	
?>		