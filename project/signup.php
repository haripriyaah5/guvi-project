<?php 
	session_start();
	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD']=="POST") {
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
			$user_id=random_num(20);

			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;

		}
		else {
			echo "please enter some valid information";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body>
	<style type="text/css">
		body{
			background-image: url("image.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}
		#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: transparent;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	#cls{
		color: white;
		align-content: center;
	}
	</style>

	<div id="box">
		<form method="post">

			<div style="font-size: 20px; margin: 1-0px;">Signup</div>

			<input type="text" id="text" name="user_name"placeholder="enter username"><br><br>
			<input type="password" id="text" name="password"placeholder="enter password"><br><br>

			<input id="button"  type="submit" value="Signup"> <br><br>
			<p id="cls">if you have an account<a href="login.php">ClickLogin</a><br><br>
		</form>
	</div>
</body>
</html>
	