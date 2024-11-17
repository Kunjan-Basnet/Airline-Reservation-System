<?php
session_start();

echo $_SESSION['name'];
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Departure,Arrival,DepartureDate,ArrivalDate,Cost,way from datas where Name='$name' and Password='$password' and Id=$id ";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$Departure=$arr[0];
$Arrival=$arr[1];
$DepartureDate=$arr[2];
$ArrivalDate=$arr[3];
$Cost=$arr[4];
$Way=$arr[5];






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
	<form method="post" action="upd.php">
		<p style="position: absolute; left: 500px; font-size: large">Thank you very much for choosing lufthansa</p>
	<div style="height: 490px; width: 750px; position: absolute; left: 300px; top: 70px; background-color:  #05164c;">
		<div style="width: 750px; height: 100px; position: absolute; top: 30px; display: flex; overflow: hidden;">
			<input type="text" placeholder="From" name="departure" value="<?php echo $Departure;?>" style="width: 330px; height: 100%; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 40px; " required>
			<img src="airplane.jpg" style="width: 70px; height: 70px; border-radius: 200px; position: absolute; left: 340px; top: 10px;">
			<input type="text" placeholder="To" name="arrival" value="<?php echo $Arrival;?>" style="width: 330px; height: 100%; background-color: #05164c; position: absolute; left:420px; outline: none; border: none; border-color: transparent; font-size: 40px; " required>
		</div>
		<p style="position: absolute; top: 80px; ">_________________________________________</p>
		<p style="position: absolute; top: 80px; left: 420px; ">_________________________________________</p>
		<input type="radio" name="way" id="oneway" value="one" style="width: 30px; height: 30px; position: absolute; top: 160px;" required >
		<label for="oneway" style="position: absolute; top: 160px; left: 70px; font-size: 30px;">One way</label>
		<input type="radio" name="way" id="twoway" value="two" style="width: 30px; height: 30px; position: absolute; top: 210px;" >
		<label for="oneway" style="position: absolute; top: 210px; left: 70px; font-size: 30px;">Two way</label>
		<p style="position: absolute; top: 250px; font-size: 20px;">Departure date(yyyy/mm/dd):</p>
		<input type="text" placeholder="Departure date (yyyy/mm/dd)" name="depday" value="<?php echo $DepartureDate;?>" style="width: 400px; height: 60px; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 30px; position: absolute; top: 300px;" required>
		<p style="position: absolute; top: 320px; ">_________________________________________________</p>
		<p style="position: absolute; top: 370px; font-size: 20px;">Arrival date(yyyy/mm/dd):</p>
		<input type="text" placeholder="Arrival date (yyyy/mm/dd)" name="arrday" value="<?php echo $ArrivalDate;?>" style="width: 400px; height: 60px; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 30px; position: absolute; top: 420px;" required>
		<p style="position: absolute; top: 440px; ">_________________________________________________</p>
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" name="" value="Continue" style="position: absolute; top: 440px; left: 640px; background-color: #fcba03; width: 110px; height: 50px; border-radius: 9px;">
		
	</div>
	</form>
	

</body>
</html>