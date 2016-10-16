<?php 
##############################################################################
##
##			                         Main page 
##					         COPYRIGHT (c) WEBSITE 2016
##
##							      Login And Register
##
##
##############################################################################
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Website&copy;Login/Register</title>
	</head>

	<style type="text/css">
		body{background-color:#64ADFF;}
		#home_footer{padding-top: 30px; margin-top: 450px; background-color: #CCCCCC; width: 985px; height: 300px;}
		ul li{margin-right: 50px; float: left; display: block; list-style-type: none;}
	</style>

<link rel="stylesheet" type="text/css" href="_/CSS/layout.css">

	<body id="home_page">
		<?php include('_/inc/home_header.php'); ?>


		<div id="welcome">
			<font size="18"><strong>W</strong></font>elcome To Website&copy;, Website&copy; Is An Online
			Social Network
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Where You Can Chat To Your Friends, Meet New Friends And Upload
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			And Share
			Your Own Multi Media Including Document Files,
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			So LOGIN or REGISTER Today
			And Stay Connected!
		</div>


		<div id="login">
		<h2 align="center">Login!</h2>
			<table id="login_table">
				<form action="index.php" method="POST">
					<tr>
						<td>
							<input size="30" type="email" name="email" id="email" placeholder="Email...">
						</td>
					</tr>
					<tr>
						<td>
							<input size="30" type="password" name="password" id="password" placeholder="Password">
						</td>
					</tr>
					<tr>
						<td>
							<input size="30" type="submit" name="login" id="login_btn" value="Login">
						</td>
					</tr>
				</form><!--Login Form-->
			</table><!--Login Table-->
		</div><!--Login Div-->

<!--		<table id="pics">
			<tr>
				<td>
					<img src="_/images/logo.png" height="100" width="100">
				</td>
				<td>
					<img src="_/images/mob.png" height="100" width="100">
				</td>
			</tr>
			<tr>
				<td>
					<img src="_/images/tab.png" height="100" width="100">
				</td>
				<td>
					<img src="_/images/logo.png" height="100" width="100">
				</td>
			</tr>
		</table> -->
		
		<div id="register">
		<h2 align="center">Register!</h2>
			<table id="register_table">
				<form action="index.php" method="POST">
					<tr>
						<td>
							<input size="30" type="text" name="fname" id="fname" placeholder="First Name..." />
							<input size="29" type="text" name="lname" id="lname" placeholder="Surname..." />
						</td>
					</tr>
					<tr>
						<td>
							<input size="66" type="email" name="email" id="email" placeholder="Email Address..." />
						</td>
					</tr>
					<tr>
						<td>
							<input size="66" type="email" name="email2" id="email2" placeholder="Re-Type Email Address..." />
						</td>
					</tr>
					<tr>
						<td>
							<input size="66" type="password" name="password" id="password" placeholder="Password...">
						</td>
					</tr>
					<tr align="center">
						<td>
							<strong>Male</strong>
							<input type="checkbox" name="gender" value="Male" />
							<strong>Female</strong>
							<input type="checkbox" name="gender" value="Female" />
						</td>
					</tr>
					<tr>
						<td align="center">
						<strong>- Date Of Birth -</strong><br>
							<select id="d_o_b">
							<?php for($d=1; $d<=31; $d++){
								echo "<option>$d</option>";
								} ?>
							</select>
							<select id="d_o_b">
								<?php $m = array('Jan','Feb','Mar','Apr','May','Jun',
												'Jul','Aug','Sep','Oct','Nov','Dec'); 
								foreach($m as $m){
									echo "<option>$m</option>";
								}
								?>
							</select>
							<select id="d_o_b">
								<?php for($y=2016; $y>=1900; $y--){
									echo "<option>$y</option>";
									} ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input size="66" type="submit" name="register" id="register_btn" value="Register Now">
						</td>
					</tr>
					<tr>
						<td align="center">
							<h5>
								By Clicking Register Now<br> 
								You Are Agreeing To Our<br> 
								<a href="#terms">Terms</a> And <a href="#privacy">Privacy Policy</a>.
							</h5>
						</td>
					</tr>					
				</form><!--Register Form-->
			</table><!--Register Table-->
		</div><!--Register Div-->


		<div id="home_footer">
			<ul>
				<li>
					<a href="login.php">Login</a>
				</li>
				<li>
					<a href="index.php">Register</a>
				</li>
				<li>
					<a href="#help">Help</a>
				</li>
				<li>
					<a href="#en">English</a>
				</li>
				<li>
					<a href="#es">Espa&ntilde;ol</a>
				</li>
				<li>
					<a href="#po">Polski</a>
				</li>
				<li>
					<a href="#terms">Terms&Conditions</a>
				</li>
				<li>
					<a href="#privacy">Privacy Policy</a>
				</li>
			</ul>
			<br>
			<ul>
				<li>
					<form action="http://maps.google.com/maps" method="get" target="_blank">
    					<label for="saddr">Google Maps</label>
    					<input type="text" name="saddr" />
    					<input type="hidden" name="daddr" value="Cullen Blvd, Houston, Texas 77047" />
    					<input type="submit" value="Find your path" />
          		  </form>
				</li>
			</ul>
		</div>
	</body><!--Body-->


</html>