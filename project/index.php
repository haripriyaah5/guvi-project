<?php 
session_start();
	include("connection.php");
	include("function.php");

	$user_data=check_login($con);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Website</title>
</head>
<body>
	<style type="text/css">
		body{
			background-image: url(regimage.jpg);
			background-size: cover;
			background-repeat: no-repeat;
		}
		#button{
			background-color:transparent ;
			display: flex;
			justify-items: right;
			height: 50px;
			width: 150px;
			border: 0px solid black;
			color: violet;
			font-size: larger;
			
		}
		#h{
			color: white;
			align-content: center;
		}
	</style>
	<div id="button">
	<br><br>
	<a href="Home"><input  id="button"  type="submit" value="Home" ></a>
	<a href="contact"><input id="button"  type="submit" value="contact" ></a><br><br>
	<a href="logout.php"><input id="button" type="submit" value="Logout" ></a>
</div>

	
	<h1 id="h">Hello,<?php echo $user_data['user_name']?> you are successfully logged in</h1>
	<h1 id="h">Date of registration is <?php echo $user_data['date'] ?> </h1>
	<h2 id="h">Your password is <?php echo $user_data['password'] ?></h2>
	
</body>
</html>