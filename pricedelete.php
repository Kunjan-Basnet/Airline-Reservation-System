<?php


$id=$_POST['id'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query="DELETE from prices where id='$id'";
mysqli_query($con,$query);
header("Location: viewprices.php");
?>