<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Departure,Arrival,Cost,seats,id from prices ";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$i=0;

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
	<p style="font-size: 20px; color: blue;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspFlights &nbsp:</p>
	<table    class="abc">
		<tr>
			<th style="background-color: #42f5ef">Departure</th>
			<th style="background-color: #42f5ef">Arrival</th>
			<th style="background-color: #42f5ef">Costs</th>
			<th style="background-color: #42f5ef">Seats</th>
			<th style="background-color: #42f5ef">Delete</th>
			<th style="background-color: #42f5ef">Update</th>
			<th style="background-color: #42f5ef">Add</th>
		</tr>
		<?php
		for ($i=0; $i <=25 ; $i++) { 
			
	
		?>
		<tr>
			<th><?php echo $arr[0];?></th>
			<th><?php echo $arr[1];?></th>
			
				<th style="color: green;"><?php echo $arr[2];?></th>
			

			
			<th><?php echo $arr[3];?></th>
			<th>
				<form method="post" action="pricedelete.php">
			<input type="hidden" name="id" value="<?php echo $arr[4]; ?>">
			<input type="image" src="icondelete.png" height="50" width="50" style=" background-color: yellow; border-radius: 30px;"></form>
			</th>
			<th>
				<form method="post" action="priceupdate.php">
			<input type="hidden" name="id" value="<?php echo $arr[4]; ?>">
			<input type="image" src="iconupdate.png" height="50" width="50" style=" background-color: yellow; border-radius: 30px;">
			
		    </form>
			</th>
			<th>
				<form method="post" action="priceadd.php">
		    	<input type="hidden" name="id" value="<?php echo $arr[4]; ?>">
		    	<input type="image" src="add.png" height="50" width="50" style=" background-color: yellow; border-radius: 30px;">
			    
		    </form>
			</th>
		</tr>
	<?php
	$arr=mysqli_fetch_array($temp);

	 } ?>
	</table>
	
	
	
	

</body>
</html>