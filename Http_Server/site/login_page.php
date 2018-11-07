<?php
include "testinput.php";
include("config.php");

session_start();


$servername = "localhost";
$username = "root";
$password = "";


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	}
	else{
		//define username and password
			$username=test_input($_POST['username']);
			$password=test_input($_POST['password']);

	
			  
			  $sql = "select * from login where password='$password' AND username='$username'";
			 $result = mysqli_query($conn, $sql);
			 
			 
			 
			 
			 if(mysqli_num_rows($result)==1){
				 
				 
				 while($row = mysqli_fetch_assoc($result)) {
					  $_SESSION['login_role']= $row["privil"];
					
					}
				 $_SESSION['login_user']=$username;//initialize session
				 $_SESSION['login_password']=$password;
			
				 ?>
				 
				 <script>
				 window.location = "Mainmenu.php";
				 </script>
				 
				 
				 <?php
			 }
			  else {
				$error = "Username or Password is invalid";
				echo $error;
				$_SESSION['login_error']=1;
					}
				 mysqli_close($conn); // Closing Connection
			 } 
			
		
		
		
	}

// Do Something
?>
