<!DOCTYPE html>

<html>
<head>


<title>Ember </title>
<style>

#rcorners5 {
	  margin: auto;
	border: 10px solid green;
    border-radius: 20px 5px 30px ;
    background: #lightgrey;
    padding: 20px; 
    width: 600px;
    height: 450px; 
	
}

.container {
    padding: 2px;
}



input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.center {
    padding: 100px 0;
    text-align: center;
}


	


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


form {
    border: 3px solid #f1f1f1;
	overflow: auto;
}
.borderall{
	border: 3px solid #f1f1f1;
	margin:auto;
	
}

.error {color: #FF0000;
text-align:right;
 margin-right:10px;}

body {
    background-color: #f2f2f2;
}

</style>
</head>

<body>

<?php include "login_page.php"; ?>

<div class="borderall">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div id="rcorners5">
				<img src="emberlogo.png" alt="Ember" style="width:600px;height:128px;"> 
			
					
					
			
				<div class="container center" >
					<label><b>Username  </b> <span class="error" > 
				<?php if(isset($_SESSION['login_error']))
				{  
				
				echo " Wrong username or password";
				}?> </span></label>
					<input type="text" placeholder="Enter Username" name="username" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>	
					
					  <button name="submit" type="submit">Login</button>
					 
					
				</div>
			
			
			
			</div> <!-- kleinei to  div to kentriko -->

		</form>
</div>	
	
	
</body>

</html>