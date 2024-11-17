<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="SELECT count(ID) FROM `datas`";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$query2="SELECT balance FROM `bank`";
$temp2=mysqli_query($con,$query2);
$arr2=mysqli_fetch_array($temp2);
$query3="SELECT count(id) FROM `flights`";
$temp3=mysqli_query($con,$query3);
$arr3=mysqli_fetch_array($temp3);





?>




<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

	<title>Admin Panel</title>
	<style type="text/css">
		a{
			text-decoration: none;
		}

		body{
			font-family: 'Fira Sans', sans-serif;
		}

		.navbar a:visited{
			color: white;
		}
		.navbar a:hover{
			
			background: rebeccapurple;
			transition: .5s;
			border-radius: 4px;


		}

		.navbar a:link{
			text-decoration: none;
			font-size: 30px;
			color: white;

		}
	</style>
</head>
<body>
	<div style="background-color: #05164c; width: 100%; height: 130px; display: flex; overflow: hidden;">
		<a href="#"><img src="lhome.jpg" height="100px"></a>
		<a href="adminindex.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 80px;"><i class="ri-dashboard-2-line"></i>Dashboard</a>
		<a href="viewprices.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 140px;"><i class="ri-price-tag-3-fill"></i>Flight prices</a>
		<a href="viewdatas.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 200px;"><i class="ri-folder-user-fill"></i>User details</a>
		<a href="transactions.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 250px;"><i class="ri-money-dollar-circle-fill"></i>Transactions</a>
		<a href="#"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 300px;"><i class="ri-plane-line"></i>Flights</a>
		<a href="index.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 380px;"><i class="ri-shut-down-line"></i>Logout</a>
		
	</div>
	<p style="height: 5px;">&nbsp</p>
	<div style="display: flex;">
		<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p>
		<div style="height: 150px; width: 300px; background-color: #05164c;">
			<p>&nbsp</p>

			

			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp  <i class="ri-user-shared-2-line"></i> Total passengers</p>
			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $arr[0];?></p>
		</div>
		<p>&nbsp &nbsp </p>
		<div style="height: 150px; width: 300px; background-color: #149077;">
			<p>&nbsp</p>
			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp <i class="ri-money-dollar-circle-fill"></i> Amount</p>
			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $arr2[0];?> </p>
		</div>
		<p>&nbsp &nbsp  </p>
		<div style="height: 150px; width: 300px; background-color: #2980B9;">
			<p>&nbsp</p>
			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp <i class="ri-flight-takeoff-line"></i> Flights</p>
			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $arr3[0];?></p>
		</div>
		<p>&nbsp &nbsp </p>
		<div style="height: 150px; width: 300px; background-color: #E74C3C;">
			<p>&nbsp</p>
			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp <i class="ri-plane-line"></i>Total Aircrafts</p>
			<p style="color: white; font-size: 20px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 33</p>
		</div>
		<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p>

	</div>
	<p>&nbsp</p>
	<div style="display: flex;">
		<p>&nbsp</p>
	<img src="flightstats.png" height="300px" width="700px">
	<img src="rev.png" height="300px" width="700px">
    </div>

</body>
</html>