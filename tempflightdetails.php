<?php
/*
session_start();
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Departure,Arrival,DepartureDate,class,Cost,ID,confirm from datas where Name='$name' and Password='$password'";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$i=0;
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Flight details</title>
</head>
<body>
	<div style="background-color: #05164c; width: 100%; height: 130px; display: flex; overflow: hidden;">
		<a href="#"><img src="lhome.jpg" height="100px"></a>
		<a href="iindex.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 150px;">Home</a>
		<a href="book.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 200px;">Book other flight</a>
		<a href="about.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 270px;">About Us</a>
		<div style="overflow: hidden; position: relative; left: 720px; top: 15px;">
			<img src="user.jpg" height="50" width="50" style="">
			<h2 style="position: relative;  color: white; "><?php echo "";?></h2>
		</div>
	</div>
	<div style="height: 10px;"></div>
	<table style="background-color: white; width: 100%;">
		<tr style="background-color: #03c2fc;">
			<th>Departure</th>
			<th>Arrival</th>
			<th>Departure date</th>
			<th>class</th>
			<th>cost</th>
			<th>ticket</th>
			<th>status</th>
			<th>Delete</th>
			<th>Update</th>
			<td>confirm</td>


		</tr>
		<?php
	while ($arr[0]!=NULL) {
		?>
		<tr>
			<td><?php echo $arr[0]; ?></td>
			<td>&nbsp &nbsp &nbsp<?php echo $arr[1]; ?></td>
			<td>&nbsp &nbsp &nbsp<?php echo $arr[2]; ?></td>
			<td>&nbsp &nbsp &nbsp<?php echo $arr[3]; ?></td>
			<td>&nbsp &nbsp &nbsp &nbsp$<?php echo $arr[4]; ?></td>
			<td>&nbsp &nbsp &nbsp &nbsp  <?php echo $arr[5]; ?></td>
			<td>&nbsp &nbsp &nbsp &nbsp <?php echo $arr[6]; ?></td>
			<td>
			<form method="post" action="delete.php">
			<input type="hidden" name="id" value="<?php echo $arr[5]; ?>">
			<input type="image" src="icondelete.png" height="50" width="50" style="position: relative; top: 20px; left: 10px; background-color: yellow; border-radius: 30px;">
			
		    </form>
		</td>
		<td>
		    <form method="post" action="up.php">
			<input type="hidden" name="id" value="<?php echo $arr[5]; ?>">
			<input type="image" src="iconupdate.png" height="50" width="50" style="position: relative; top: 20px; left: 45px; background-color: yellow; border-radius: 30px;">
			
		    </form>
		</td>
		<td>
		    <form method="post" action="pay1.php">
		    	<input type="hidden" name="id" value="<?php echo $arr[5]; ?>">
		    	<input type="image" src="iconconfirm.png" height="50" width="50" style="position: relative; top: 20px; left: 75px; background-color: yellow; border-radius: 30px;">
			    
		    </form>
		</td>
		</tr>
		<?php
		$arr=mysqli_fetch_array($temp);

	}
	?>


	</table>

</body>
</html>