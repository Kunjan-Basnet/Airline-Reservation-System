<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Departure,Arrival,DepartureDate,class,Cost,ID,confirm,name from datas ";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$i=0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Flight Details</title>
	<style type="text/css">
		body{
			
			background-color: white;



		}
		a{
			text-decoration: none;
		}
		
	</style>
</head>
<body>
	<div style="background-color: #05164c; width: 100%; height: 130px; display: flex; overflow: hidden;">
		<a href="#"><img src="lhome.jpg" height="100px"></a>
		<a href="adminindex.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 150px;">Home</a>
		<a href="viewprices.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 200px;">View/edit prices</a>
		<a href="about.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 270px;">About Us</a>
		<div style="overflow: hidden; position: relative; left: 720px; top: 15px;">
			<img src="user.jpg" height="50" width="50" style="">
			<h2 style="position: relative;  color: white; "></h2>
		</div>
	</div>
	<div style="height: 10px;"></div>
	<div style="height: 80px; width: 100%; background-color: #03c2fc; overflow: hidden; display: flex;">
		<p style="font-size: 25px; position: relative;  color: white; ">Departure</p>
		<p style="font-size: 25px; position: relative;  left: 90px; color: white; ">Arrival</p>
		<p style="font-size: 25px; position: relative;  left: 180px; color: white; ">Departure Date</p>
		<p style="font-size: 25px; position: relative;  left: 230px; color: white; ">Class</p>
		<p style="font-size: 25px; position: relative;  left: 320px; color: white; ">Cost</p>
		<p style="font-size: 25px; position: relative;  left: 360px; color: white; ">Ticket Id</p>
		<p style="font-size: 25px; position: relative;  left: 440px; color: white; ">Status</p>
		<p style="font-size: 25px; position: relative;  left: 440px; color: white; ">Nam</p>
		
	</div>
	<div style="height: 5px;"></div>
	<?php
	while ($arr[0]!=NULL) {
		?>
		<div style="width: 100%; height: 100px; color: white; background-color: black; display: flex;">
			<p style="font-size: 30px;"><?php echo $arr[0]; ?></p>
			<p style="font-size: 30px;">&nbsp &nbsp &nbsp<?php echo $arr[1]; ?></p>
			<p style="font-size: 30px;">&nbsp &nbsp &nbsp<?php echo $arr[2]; ?></p>
			<p style="font-size: 30px;">&nbsp &nbsp &nbsp<?php echo $arr[3]; ?></p>
			<p style="font-size: 30px;">&nbsp &nbsp &nbsp &nbsp$<?php echo $arr[4]; ?></p>
			<p style="font-size: 30px;">&nbsp &nbsp &nbsp &nbsp  <?php echo $arr[5]; ?></p>
			<p style="font-size: 30px;">&nbsp &nbsp &nbsp &nbsp <?php echo $arr[6]; ?></p>
			<p style="font-size: 30px;">&nbsp &nbsp &nbsp &nbsp <?php echo $arr[7]; ?></p>

			<p>&nbsp</p>
			<form method="post" action="delete.php">
			<input type="hidden" name="id" value="<?php echo $arr[5]; ?>">
			<input type="image" src="icondelete.png" height="50" width="50" style="position: relative; top: 20px; left: 10px; background-color: yellow; border-radius: 30px;">
			
		    </form>
		    <form method="post" action="aup.php">
			<input type="hidden" name="id" value="<?php echo $arr[5]; ?>">
			<input type="image" src="iconupdate.png" height="50" width="50" style="position: relative; top: 20px; left: 45px; background-color: yellow; border-radius: 30px;">
			
		    </form>
		    <form method="post" action="pay1.php">
		    	<input type="hidden" name="id" value="<?php echo $arr[5]; ?>">
		    	<input type="image" src="iconconfirm.png" height="50" width="50" style="position: relative; top: 20px; left: 75px; background-color: yellow; border-radius: 30px;">
			    
		    </form>
		</div>

		<br>
		<?php
		$arr=mysqli_fetch_array($temp);

	}
	?>
	
	

</body>
</html>