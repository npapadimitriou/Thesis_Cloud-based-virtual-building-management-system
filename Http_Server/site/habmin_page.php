<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <title>Habmin </title>
	  
	    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="import" href="http://localhost:8080/openhab.app?sitemap=demo#">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
	  
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
			width:100%;
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
	  </script>
	  
   </head>
   
   <body>
		   
			   <nav  class=" navbar navbar-inverse ">
		<div  class="container-fluid">
			<div  class="navbar-header">
				<p class="navbar-brand " >Welcome  <?php echo $login_session; ?></p>
			</div>
			<ul class="nav navbar-nav">
				<li style=" font-size:20px;">
					<a href="Mainmenu.php">Home/</a>
				</li>
				
				<li class="active" >
					<a>Habmin</a>
				</li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="http://localhost/diploma/management_page.php">
						<span class="glyphicon glyphicon-wrench"/>Management</a>
				</li>
				<li>
					<a href="logout.php">
						<span class="glyphicon glyphicon-log-in"/> Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	   
	  <div class="container-fluid">
	   
	   
		<div class="row" >
				
					<div class="col-lg-12 text-center">
							<object type="text/html" id="openhabwindow" class="openhab_style"  data="http://localhost:8080/habmin/index.html"  style="border:5px ridge blue">
						</object>
		
					</div>
		</div>	
				
	</div>	
   </body>
   
</html>