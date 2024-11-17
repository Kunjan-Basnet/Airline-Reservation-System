<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="SELECT departure,arrival,pilot,datee FROM flights ";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Transactions</title>
	<style type="text/css">
		body{
			background: linear-gradient(to right top, #D65BCA, #21D190);
		}
		a{
			text-decoration: none;
		}
		.abc{
			position: relative;
			left: 80px;
			border: none;
			background: linear-gradient(to right top, #B0F3F1, #FFCFDF);
			height: 490px;
			width: 1200px;
			font-size: 20px;


		}
	</style>
</head>
<body>
	<div style="background-color: #05164c; width: 100%; height: 130px; display: flex; overflow: hidden;">
		<a href="#"><img src="lhome.jpg" height="100px"></a>
		<a href="adminindex.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 80px;">Dashboard</a>
		<a href="viewprices.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 140px;">Flight prices</a>
		<a href="viewdatas.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 200px;">User details</a>
		<a href="transactions.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 250px;">Transactions</a>
		<a href="#"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 300px;">Flights</a>
		<a href="index.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 380px;">Logout</a>
		
	</div>
	<p style="font-size: 20px; color: blue;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspLatest 10 transactions &nbsp:</p>
	<table    class="abc">
		<tr>
			<th style="background-color: #42f5ef">Departure</th>
			<th style="background-color: #42f5ef">Arrival</th>
			<th style="background-color: #42f5ef">Pilot</th>
			<th style="background-color: #42f5ef">Date</th>
			
		</tr>
		<?php
		for ($i=0; $i <=9 ; $i++) { 
			
	
		?>
		<tr>
			<th><?php echo $arr[0];?></th>
			<th><?php echo $arr[1];?></th>
			
				<th style="color: green;"><?php echo $arr[2];?></th>
			

			
			<th><?php echo $arr[3];?></th>
			
		</tr>
	<?php
	$arr=mysqli_fetch_array($temp);

	 } ?>
	</table>

</body>
</html>