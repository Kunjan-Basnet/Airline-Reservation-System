<?php

$id=$_POST['id'];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$cost=$_POST['cost'];
$seats=$_POST['seats'];



$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');

$query2="UPDATE prices SET cost='$cost', Departure='$departure',Arrival='$arrival',seats='$seats' where ID='$id'";
mysqli_query($con,$query2); 


header("Location: viewprices.php");



?>