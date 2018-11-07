<?php
   include('session.php');
   include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <title>Management </title>
	  
	    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href"http://glyphicons.com/">
	  <link rel="import" href="http://localhost:8080/openhab.app?sitemap=demo#">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.min.js"></script>
	  
	  
	  
	  <style>
	  .top{
		position: relative;  
	    background-color: #4CAF50;
		color: white;
		padding: 8px 0px 8px 8px;
		/*width: 1505px;
		height: 50px; */
		  
	  }
	  
	  body {
		background-color: #f2f2f2;
		border: 10px solid green;
		border-radius: 20px 5px 30px ;
		min-height: 100%;
		min-height: -webkit-calc(100% - 20px);
		min-height: -moz-calc(100% - 20px);
		min-height: calc(100% - 20px);
		/*width: 1600px;
		width: 1510px;
		height: 600px; */
		}
	  
	  
	  
			  html{
			height:100%;
			height: -webkit-calc(100% - 20px);
			height: -moz-calc(100% - 20px);
			height: calc(100% - 20px);
			}

	  
	  #logouticon{
	  position: relative;
	   display:inline;
	  padding: 10px 10px 50px 1500px;
	  right: 10px;
	  top: 18px;
	  width:50px;
	  height:50px;
	  cursor: pointer;
	  
	  }
	  
	  .container-pos{
	   position: relative;
	  
	  }
	  .infront{
	   position: absolute;
	   z-index: 10;
	   display: block;
	   top: 0;
	   left: 0;
	  }
	  
	  .divfinder{
	  border: 10px solid green;
	  }
	  
	  
	  
	  .container-fluid {
		margin-left: auto;
		margin-right: auto;
		padding-left: 15px;
		padding-right: 15px;
		}
	  
	  .optionbox{
		background-color: #8FB3D4;
		border: 3px solid green;
		border-radius: 20px 20px 20px 20px ;
		/*width: 300px;*/
		height: 200px; 
		cursor: pointer;
		text-decoration: none;
		/*vertical-align:middle; */
		text-align:center;
		
	  }
	  
	  .textoption{
		    text-align: center;
		    letter-spacing: 2px;
			font-size:30px;
			color:white;
			text-decoration: none;
	  }	
		
		.option_image{
		//display: block;
		//margin:auto;
		height:60px;
		}

						
		.outer {
		display: table;
		height: 100%;
		width: 100%;
		}

		.middle {
		display: table-cell;
		vertical-align: middle;
		}

		.inner {
		margin-left: auto;
		margin-right: auto; 
		width: /*whatever width you want*/;
		}

		cont {
		position: relative;
		}
		
		.openhab_style{
			width:80%;
			/*height:1000px;*/
			position:relative;
			
		}
		
		.navi,
		.infoi {
		  position: absolute;
		  top: 0;
		  left: 0;
		 
		}
		.infowar{
		display:block;
		background-color:white;
		}
		#infoi {
		  z-index: 10;
		}
		
		
		
		
  </style>
	  <script>
	  $(document).ready(function(){
		  $(".openhab_style").css("height",window.innerHeight-100+"px");
		  //alert(window.innerHeight);
	  });
	  function del(uid,name) {
		  BootstrapDialog.confirm('Delete user '+name+', are you sure?', function(ok) {
			  if (ok) {
				    var form = document.createElement("form");
					form.setAttribute("method", "post");
					form.setAttribute("action", "<?php echo $_SERVER['PHP_SELF']; ?>");

					var actField = document.createElement("input");
					actField.setAttribute("type", "hidden");
					actField.setAttribute("name", "action");
					actField.setAttribute("value", "deluser");
					form.appendChild(actField);
					
					var uidField = document.createElement("input");
					uidField.setAttribute("type", "hidden");
					uidField.setAttribute("name", "uid");
					uidField.setAttribute("value", uid);
					form.appendChild(uidField);

					document.body.appendChild(form);
					form.submit();
			  }
				  
		  });
	  }
	  </script>
	  
	  
	  
	  
	  
	  
	  
   </head>
   
   <body>
		   
			   <nav  class=" navbar navbar-inverse ">
		<div  class="container-fluid">
			<div  class="navbar-header">
				<p class="navbar-brand" >Welcome  <?php echo $login_session; ?></p>
			</div>
			<ul class="nav navbar-nav">
				<li style=" font-size:20px;">
					<a href="Mainmenu.php">Home/</a>
				</li>
				<li class="active" >
					<a>Management</a>
				</li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-wrench"/>Management</a>
				</li>
				<li>
					<a href="logout.php">
						<span class="glyphicon glyphicon-log-in"/> Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	   
	
	
	
	
		<div class="container">
			 
			<ul class="nav nav-tabs">
			<?php
				if($_SESSION['login_role']==0){?>
				
				<li class="active"> <a data-toggle="tab" href="#addusr"> <i class="material-icons"> person_add</i>  <span style="font-size:15px; font-weight: bold;"> Add User</span></a></li>
				<?php } ?>
				
				<li><a data-toggle="tab" href="#changepass"><i class="fa fa-unlock-alt" style="font-size:24px"></i> 
			         <span style="font-size:15px; font-weight: bold;"> Change Password</span></a></li>
				
				
				
				<?php
				if($_SESSION['login_role']==0){?>
			<li><a data-toggle="tab" href="#deluser"><i class="material-icons" style="font-size: 18px;   text-align: right;">close</i><i class="material-icons">person</i><span style="font-size:15px; font-weight: bold;">  Delete user </span></a></li>		

			<?php } ?>
			
			
		<!--				<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
				
			</ul>

			
			
			<?php //include "addauser.php"; ?>
			<?php //include "changepassword.php";?>
			
<?php
if (isset($_POST['action'])) {
	if ($_POST['action']=="deluser") {
		include "deluser.php";
	}
	elseif ($_POST['action']=="addusr") {
		include "addauser.php";
	}
	if ($_POST['action']=="changepass") {
		include "changepassword.php";
	}
}
?>		
		<?php 
			if(isset($level_alert)){
			
				echo '<div id="alert" class="'.$level_alert.'" role="alert">'.$message_alert.'</div>';
				?>
				<script>
				$("#alert").fadeTo(2000, 500).slideUp(500, function(){
					$("#alert").slideUp(500);
				});
				</script>
<?php
			}

		?>

			<div class="tab-content">
				<div id="addusr" class="tab-pane fade in active">
				  <div class="container">
					  <h2>New user's credentials</h2>
					  <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					    <input type="hidden" name="action" value="addusr">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Usename:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" name="addusrname" id="addusrnm" placeholder="Enter Username" required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" name="addusrpswd" id="pwd" placeholder="Enter password" required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Role:</label>
						  <div class="col-sm-10">          
							 <input type="radio" name="role" value="Admin">Administrator
							 <input type="radio" name="role" value="User">User
						  </div>
						</div>
							  
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button  name="submit" type="submit" class="btn btn-default">Submit</button>
						  </div>
						</div>
					  </form>
					</div>
				  
				  
				
				
				</div>
				<div id="changepass" class="tab-pane fade">
				  <h3> Enter your credentials</h3>
				  
				    <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					    <input type="hidden" name="action" value="changepass">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd"> Current password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" name="curpswd" id="pwd" placeholder="Enter password" required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd"> New password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" name="newpswd" id="pwd" placeholder="Enter new password" required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Re-type new password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" name="newpswd2" id="pwd" placeholder="Enter new password" required>
						  </div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button  name="submit" type="submit" class="btn btn-default">Submit</button>
						  </div>
						</div>
							
				    </form>
				
				
				
				

</div>
<div id="deluser" class="tab-pane fade">
	 
	<div class="container">
  <h2>Manage users</h2>
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>ROLE</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
     
	
	<?php
					 if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					

					$sql="SELECT Id,username,privil FROM login";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
						//	echo "id: " . $row["Id"]. " - Name: " . $row["username"]. " " . $row["privil"]. "<br>";
						if($row["privil"]==0){$roleplaying="Administrator";}else{$roleplaying="User";}
					echo   "<tr><td>". $row["Id"]."</td><td>". $row["username"]."</td><td>".$roleplaying."</td>";
					echo '<td><a href="#" onClick="del('.$row["Id"].',\''.$row["username"].'\')" class="confirm-delete btn mini red-stripe" role="button" data-title="kitty" data-id="2">Delete</a></td>';
					echo "</tr>";		
						}
					} else {
						echo "0 results";
					}

					mysqli_close($conn);
										
										
					
	?>

	


</div>
<div id="menu3" class="tab-pane fade">
	<h3>Menu 3</h3>
	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
</div>
</div>
</div>

				
	
	
	
   </body>
   
</html>
<?php
if (isset($_POST['action'])) {
	echo "<script>$('.nav-tabs a[href=\"#" . $_POST['action'] . "\"]').tab('show')</script>";
}
?>