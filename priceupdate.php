<?php

$id=$_POST['id'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Departure,Arrival,Cost,seats from prices where ID=$id ";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$Departure=$arr[0];
$Arrival=$arr[1];
$Cost=$arr[2];
$seats=$arr[3];







?>
<!DOCTYPE html>
<html>
<head>
	<title>Book flight</title>
	<style type="text/css">
		body{
			background-image: url(back.jpg);
		}
	</style>
</head>
<body>
	<form method="post" action="adminupd.php">
		<p style="position: absolute; left: 500px; font-size: large">Thank you very much for choosing lufthansa</p>
	<div style="height: 490px; width: 750px; position: absolute; left: 300px; top: 70px; background-color:  #05164c;">
		<div style="width: 750px; height: 100px; position: absolute; top: 30px; display: flex; overflow: hidden;">
			<input type="text" placeholder="From" name="departure" value="<?php echo $Departure;?>" style="width: 330px; height: 100%; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 40px; " required>
			<img src="airplane.jpg" style="width: 70px; height: 70px; border-radius: 200px; position: absolute; left: 340px; top: 10px;">
			<input type="text" placeholder="To" name="arrival" value="<?php echo $Arrival;?>" style="width: 330px; height: 100%; background-color: #05164c; position: absolute; left:420px; outline: none; border: none; border-color: transparent; font-size: 40px; " required>
		</div>
		<p style="position: absolute; top: 80px; ">_________________________________________</p>
		<p style="position: absolute; top: 80px; left: 420px; ">_________________________________________</p>
		
		<p style="position: absolute; top: 250px; font-size: 20px;">Costs:</p>
		<input type="text" placeholder="Departure date (yyyy/mm/dd)" name="cost" value="<?php echo $Cost;?>" style="width: 400px; height: 60px; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 30px; position: absolute; top: 300px;" required>
		<p style="position: absolute; top: 320px; ">_________________________________________________</p>
		<p style="position: absolute; top: 370px; font-size: 20px;">seats:</p>
		<input type="text" placeholder="Arrival date (yyyy/mm/dd)" name="seats" value="<?php echo $seats;?>" style="width: 400px; height: 60px; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 30px; position: absolute; top: 420px;" required>
		<p style="position: absolute; top: 440px; ">_________________________________________________</p>
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" name="" value="Continue" style="position: absolute; top: 440px; left: 640px; background-color: #fcba03; width: 110px; height: 50px; border-radius: 9px;">
		
	</div>
	</form>
	

</body>
</html>