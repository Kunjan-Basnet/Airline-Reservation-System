<?php
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$class=$_POST['class'];
$confirm=$_POST['confirm'];
$id=$_POST['id'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');

$query="UPDATE datas SET Name='$name',Email='$email',Address='$address',Departure='$departure',Arrival='$arrival',class='$class',confirm='$confirm' where ID='$id'";
mysqli_query($con,$query);

header("Location: viewdatas.php");


?>