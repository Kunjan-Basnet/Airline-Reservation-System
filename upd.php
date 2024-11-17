<?php
session_start();

echo $_SESSION['name'];
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$id=$_POST['id'];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$way=$_POST['way'];
$depday=$_POST['depday'];
$arrday=$_POST['arrday'];


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="SELECT Departure,Arrival,Cost from prices where Departure='$departure' and Arrival='$arrival' ";
$temp1=mysqli_query($con,$query1);
$arr1=mysqli_fetch_array($temp1);
if (is_null($arr1[0])) {
	echo "No Service";
}
else
{
$cost=$arr1[2];
if ($way=="two") {
	$cost=$cost*2;
}
$query2="UPDATE datas SET Departure='$departure',Arrival='$arrival',DepartureDate='$depday',ArrivalDate='$arrday',Way='$way',Cost='$cost' WHERE Name='$name' and Password='$password' and Id='$id'";
mysqli_query($con,$query2);

header("Location: flightdetails.php");
}


?>