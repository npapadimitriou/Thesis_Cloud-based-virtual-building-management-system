 <?php
include "testinput.php";
include("config.php");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




if (isset($_POST['submit'])) {

if (empty($_POST['addusrname']) || empty($_POST['addusrpswd'])||empty($_POST['role'])) {
	$error = "Username or Password is invalid";
	}
	else{
		//define username and password
			$username=test_input($_POST['addusrname']);
			$password=test_input($_POST['addusrpswd']);
			$role=test_input($_POST['role']);
			
			if($role=="Admin"){
				$role_number=0;
			}
			else{
				$role_number=1;
			}
			
			
			//SQL query to fetch information of registerd user and find user match
				$stmt = mysqli_prepare($conn,"select * from login where username=?");
			   /* bind parameters for markers */
				mysqli_stmt_bind_param($stmt, "s",$username);
				/* execute query */
				mysqli_stmt_execute($stmt);

				    /* store result */
				mysqli_stmt_store_result($stmt);
				$rows=mysqli_stmt_num_rows ($stmt);
			   /* close statement */
				mysqli_stmt_close($stmt);
			 
			  
			 
			 if($rows==1){
				 $errorMessage = "Username already taken";
				
			 }
			 
			 else{
				
				$sql = "INSERT INTO login (username, password,privil)  VALUES ('$username', '$password','$role_number')";
				 
										 
						if (mysqli_query($conn, $sql)) {
							
							$level_alert="alert alert-success";
							$message_alert="User has been added successfully";
						} else {
							$level_alert="alert alert-danger";
							$message_alert="There was a problem!! User could not be added!!";
						
						}

						//mysqli_close($conn);
				
										 
			 }
		
		
		
	}
}


?> 