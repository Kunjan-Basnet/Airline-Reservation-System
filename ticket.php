<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="SELECT confirmed.name,flightno,gate,seat,timee,destination.shortform FROM confirmed INNER JOIN destination ON confirmed.departure=destination.name ORDER BY confirmed.id DESC";
$query2="SELECT destination.shortform FROM confirmed INNER JOIN destination ON confirmed.arrival=destination.name ORDER BY confirmed.id DESC";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$temp2=mysqli_query($con,$query2);
$arr2=mysqli_fetch_array($temp2);
if ($arr[4]=='10:00') {
	$regno='6234';
}
else if ($arr[4]=='12:00') {
	$regno='1134';
}
else if ($arr[4]=='2:00') {
	$regno='4321';
}
else if ($arr[4]=='4:00') {
	$regno='217S';
}
?>


<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Libre Barcode 39' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<title></title>
</head>
<body>
<div style="display: flex; box-shadow: 0 0 100px #aaa; ">
	<table   width="70%" cellspacing="0" cellpadding="0" style="border-right: dotted; ">
		<tr style="background-color: yellow;">
			<td colspan="2"><h1>Lufthansa</h1></td>
			<td colspan="2"><p>Boarding Pass</p></td>
		</tr>
		<tr>
			<td colspan="4" style="font-size: 60px; background-color: #f2f0e9;">&nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $arr[5];?> <i class="ri-flight-takeoff-fill"></i> <?php echo $arr2[0];?></td>
		</tr>
		<tr style="background-color: #ebe6d8;">
			<td><p>passenger name<br><strong><?php echo $arr[0];?></strong></p></td>
			<td><p>Flight no<br><strong><?php echo $regno;?></strong></p></td>
			<td><p>Gate<br><strong>B12</strong></p></td>
			<td><p>Seat<br><strong>A33</strong></p></td>
		</tr>
		
		<tr style="background-color: #ebe6d8;">
			<td colspan="4"><p>Boarding time <br><strong><?php echo $arr[4];?></strong></p></td>
		</tr>
		<tr style="background-color: yellow;">
			<td colspan="4" style="font-family: 'Libre Barcode 39';font-size: 22px; height: 10px;"><p>Aaditya Adhikari</p></td>
		</tr>
	</table>
	<table   width="30%" cellspacing="0" cellpadding="0" style=" ">
		<tr style="background-color: #fcfc03; height: 50px;">
			<td colspan="2"><h1>&nbsp &nbsp &nbsp Lufthansa</h1></td>
			
		</tr>
		<tr>
			<td colspan="2" style="font-size: 60px; background-color: #f2f0e9;"> <?php echo $arr[5];?> <i class="ri-flight-takeoff-fill"></i> <?php echo $arr2[0];?></td>
		</tr>
		<tr style="background-color: #ebe6d8;">
			<td><p>Flight no<br><strong><?php echo $regno;?></strong></p></td>
			<td><p>Seat<br><strong>A33</strong></p></td>
		</tr>
		
		<tr style="background-color: #ebe6d8;">
			<td colspan="2"><p>Passenger name <br><strong><?php echo $arr[0];?></strong></p></td>
		</tr>
		<tr style="background-color: yellow;">
			<td colspan="2" style="font-family: 'Libre Barcode 39';font-size: 22px; height: 10px;"><p>Aaditya Adhikari</p></td>
		</tr>

	</table>
</div>
<button onclick="window.print()" style="border: blue; color: blue; height: 40px; width: 80px; "><i class="ri-printer-line"></i>Print</button>
<br><br><br>
<a href="flightdetails.php">Return</a>
</body>
</html>