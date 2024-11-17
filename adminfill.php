<?php
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$cost=$_POST['cost'];
$seats=$_POST['seats'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query="insert into prices(Departure,Arrival,Cost,seats) values('$departure','$arrival','$cost','$seats')";
mysqli_query($con,$query);
header("Location: viewprices.php");


?>