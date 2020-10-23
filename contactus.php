<!DOCTYPE html>
<html>
	<head>
	<title>CAMERAXIS</title>
	<link rel="icon" href="Header & Footer/Camera.png"/>
	<link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
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
				
				/* Create four equal columns that floats next to each other */
					.column {
						float: left;
						width: 25%;
						padding: 10px;
						height: 300px; /* Should be removed. Only for demonstration */
					}

					/* Clear floats after the columns */
					.row:after {
						content: "";
						display: table;
						clear: both;
					}
					input[type=text], select {
						width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}
					textarea {
						width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						display: block;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}

					input[type=submit] {
						width: 30%;
						background-color: gray;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						border-radius: 4px;
						cursor: pointer;
						 float: right;
					}

					input[type=submit]:hover {
						background-color: gray;
					}
					
					a:link {
					color: black;
					background-color: transparent;
					text-decoration: none;
				}
				
				a:hover {
					color: black;
					background-color: transparent;
					text-decoration: none;
				}

				a:active {
					color: black;
					background-color: transparent;
					text-decoration: none;
				}
	</style>
	
	</head>
	
	<body>

		<div class="row" >

			<div class="col-1">
			</div>

			<div class="col-2" align="center" >
			<a href="aboutus.php">ABOUT US</a>
			</div>
			<div class="col-2" align="center">
			<a href="services.php">SERVICES</a>
			</div>
			<div class="col-2" align="center">
			<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>
			<div class="col-2" align="center">
			<a href="contactus.php">CONTACT US</a>
			</div>
			<div class="col-2" align="center">
			<a href="login.php">LOGIN</a>
			</div>
			
			<div class="col-1">
			</div>

		</div>

		<div class="col-12">
			<img src="Home/contactus.jpg" style="width:100%;height:400px;">
		</div>
		
		<div class="col-12">
			<h1 Style="background-color:gray;padding:5px" align="center">Get in Touch</h1>
		</div>

		<div class="col-12">
			<div class="row">
					<div class="col-6" align="center">
						<img src="Home/contactus1.jpg" style="width:100%;height:370px;">
					</div>
			
					<div class="col-6">
							  <form action="/action_page.php">
								<label for="fname">Full Name</label>
								<input type="text" id="fname" name="fullname" placeholder="Your Fullname..">

								<label for="lname">Email</label>
								<input type="text" id="email" name="email" placeholder="Your Email address...">

								<label for="country">Country</label>
								<select id="country" name="country">
								<option value="srilanka">Srilanka</option>
								  <option value="australia">Australia</option>
								  <option value="canada">Canada</option>
								  <option value="usa">USA</option>
								</select>
								<label for="lname">Message</label>
								<textarea>Say Something...</textarea>
							  
								<input type="submit" value="Submit">
							  </form>
					</div>
			</div>
		</div>

		<div class="col-12 footer">
			<div class="row">
				<div class="col-12" id="googleMap" style="width:100%;height:300px;background-color:gray">
					<!--a href="https://www.google.com/maps/place/Ridgeway+Pl,+Colombo/@6.8798504,79.8554955,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bc6d5e20acd:0xd0eb67a7aefc8ff1!8m2!3d6.8798504!4d79.8576842"><img src="Header & Footer/map.png" style="height:300px;width:100%"></a-->
					<script>
						function myMap() {
							var mapProp= {center:new google.maps.LatLng(-25.363, 131.044),zoom:5,};
							var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
						}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=myMap"></script>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-12">
							<img src="Header & Footer/62516.png">No 12, Ridgeway place Colombo 04
						</div>
						<div class="col-12">
							<img src="Header & Footer/img_286083.png">011-2547658
						</div>
						<div class="col-12">
							<img src="Header & Footer/email.png">www.cameraxis@gmail.com
						</div>
					</div>
				</div>
				
				<div class="col-6">
					<a href="https://www.facebook.com/cameraxis/"><img src="Header & Footer/facebook-4dd1631e86173638d2c9aaa051dd7f8f.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
					<a href="https://www.instagram.com/cameraxisapp/?hl=en"><img src="Header & Footer/md_5a98273a4e62e.png" style="height:10%;width:10%"></a>&nbsp &nbsp &nbsp
					<a href="https://plus.google.com/+Cameraxis"><img src="Header & Footer/md_5a98273aeeb5a.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
					<a href="https://twitter.com/cameraxis"><img src="Header & Footer/md_5a98273bb9a60.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
				</div>
			</div>		
		</div>

	</body>
</html>