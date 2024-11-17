<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$comment=$_POST['Comment'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query="insert into feed(name,email,comment) values('$name','$email','$comment')";
mysqli_query($con,$query);
header("Location: feedback.php");




?>