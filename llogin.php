<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			background-color: pink;
		}
		.container{
			background-color: white;
			width: 600px;
			height: 350px;
			position: absolute;
			top: 100px;
			left: 370px;
			border-radius: 50px;
			overflow: hidden;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 style="position: absolute; left: 50px;">Login</h1>
		<form method="POST" action="laction.php">
		<input name="name" type="text" placeholder="Name" style="outline: none; border: none; border-color: transparent; width: 500px; height: 100px; font-size: 30px; position: absolute; left: 50px; top: 70px;">
		<p style="position: absolute; left: 50px; top: 110px;">
			_________________________________________________
		</p>
		<input type="password" name="password" placeholder="Password" style="outline: none; border: none; border-color: transparent; width: 500px; height: 100px; position: absolute; left: 50px; top: 160px; font-size: 30px; ">
		<p style="position: absolute; left: 50px; top: 200px;">
			_________________________________________________
		</p>
		<div style="width: 600px; height: 50px; position: absolute; top: 300px;">
			<input type="button" onclick="window.location.href='register.php'" name="" onclick="window.location.href='project.html'" style="width: 300px; height: 50px; outline: none; border: none; border-color: transparent; background-color: grey;" value="Register"> 
			<input type="submit"  style="width: 300px; height: 50px; float: right; outline: none; border: none; border-color: transparent; background-color: #34dbeb;" value="Login">

		</div>
	</form>
	</div>
	

</body>
</html>