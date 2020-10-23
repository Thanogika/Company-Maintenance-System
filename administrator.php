<?php
session_start();
if(!isset($_SESSION['User_Name'])){
	//header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title> Administrator </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
		

		* {
			box-sizing: border-box;
		}
		.row::after {
			content: "";
			clear: both;
			display: table;
			}
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
	
		.header {
			color: #ffffff;
			padding: 15px;
			font-size:25px;
		}
		
		a:link {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
		
		a:visited {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
		
		a:hover {
			color:black;
			background-color: transparent;
			text-decoration: none;
		}

		a:active {
			color: black;
			background-color: transparent;
			text-decoration: none;
		}
		
		
		.Activity ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		.Activity li {
			padding: 8px;
			margin-bottom: 7px;
			font-size:25px;
			background-color:#bbbb77;
			color:#f2f2f2;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}
		
		.para{
			font-size:5px;
			color: #000000;
			font-weight:bold;
			font-size:15px;
			text-align:center;
			background-color:#cccc99;
			border-radius: 0px 0px 0px 0px;
		}
		.footer{
			background-color:#aaaa55;
		}
		
		.div2{
			background-color:#aaaa55;
			font-style: italic;
			font-size: 14px;
			color:black;
			font-weight:bold;
		}

		button{
						width: 70%;
						/*padding: 12px 20px;
						/*margin: 8px 0;
						/*display: block;
						/*border: 1px solid #ccc;*/
						border-radius: 4px;
						/*box-sizing: border-box;*/
					}

					.cancelbtn{
		background-color: white;
		border: none;
		border-radius: none;
	}
		
	</style>
</head>

<body>

	<div class="header1">

			<div class="col-1">
			</div>

			<div class="col-2" align="center" >
			<a href="staffdetails.php">STAFF DETAILS</a>
			</div>
			<div class="col-2" align="center">
			<a href="leavedetails.php">LEAVE DETAILS</a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			<div class="col-2" align="center">
			<a href="adminviewtask.php">TASK DETAILS </a>
			</div>
			<div class="col-2" align="center">
			<a href="logout.php"><button type="submit" class="cancelbtn" name="logout">LOG OUT</button></a>
			</div>
			
			<div class="col-1">
			</div>
	</div>
	
	<div class="Image ">
		<img src="Administrator/admin1.jpeg" style="width:100%;height:500px;border-radius: 25px 25px 0px 0px;"> <br>
	</div>
	
	<div class="para col-12">
	<h1> WORK HARD DREAM BIG.</h1>
	</div>
	
	<div class="row">
		<div class="Activity col-3">
		<ul>
			<li> <a href="givetask.php" class="a2"> Give Task </a> </li>
			
			<li> <a href="sendmessage.php" class="a2"> Message </a> </li>
			<li> <a href="entrysalary.php" class="a2"> Salary </a> </li>
			<li> <a href="getfeedback.php" class="a2"> Feedback </a> </li>
		</ul>
		</div>	
		
		<div class ="img col-4">
		<img src="Administrator/admin2.png" style="width:100%;height:350px;">
		</div>
		
		<div class ="col-5">
		<img src="Administrator/images (1).jpg" style="width:100%;height:340px;">
		</div>
	</div>
	
	<div class="footer col-12">
		<div class="col-4 footer" align="center">
			<table>
				<tr style="height:50px">
				<td>
				<img src="Header & Footer/62516.png" style="height:5%;width:5%">
				No 12, Ridgeway place Colombo 04
				</td>
				</tr>
					
				<tr style="height:70px">
				<td>
				<img src="Header & Footer/img_286083.png" style="height:5%;width:5%">
				011-2547658
				</td>
				</tr>
					
				<tr>
				<td>
				<img src="Header & Footer/email.png" style="height:5%;width:5%">
				www.cameraxis@gmail.com
				</td>
				</tr>
			</table>
		</div>
			
		<div class="col-4 footer" align="center-left">
			<a href="https://www.facebook.com/cameraxis/"><img src="Header & Footer/facebook-4dd1631e86173638d2c9aaa051dd7f8f.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
			<a href="https://www.instagram.com/cameraxisapp/?hl=en"><img src="Header & Footer/md_5a98273a4e62e.png" style="height:10%;width:10%"></a>&nbsp &nbsp &nbsp
			<a href="https://plus.google.com/+Cameraxis"><img src="Header & Footer/md_5a98273aeeb5a.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
			<a href="https://twitter.com/cameraxis"><img src="Header & Footer/md_5a98273bb9a60.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
		</div>
			
		<div class="col-4 footer" align="center" style="height:200px">
			<a href="https://www.google.com/maps/place/Ridgeway+Pl,+Colombo/@6.8798504,79.8554955,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bc6d5e20acd:0xd0eb67a7aefc8ff1!8m2!3d6.8798504!4d79.8576842"><img src="Header & Footer/map.png" style="height:100%;width:80%"></a>
		</div>

	</div>
	
</body>
</html>