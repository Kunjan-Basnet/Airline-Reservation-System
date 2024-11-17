<?php
session_start();
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$id=$_POST['id'];
$pinno=$_POST['pinno'];
echo $name;
echo $password;
echo $id;
$datee = date("j- n- Y");
$timee = date("H:i:s"); 
if ($pinno=='1234') {
	$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query2="UPDATE datas SET confirm = 'confirmed' WHERE Name='$name' and Password='$password' and Id='$id'";
mysqli_query($con,$query2);
$query3="SELECT Cost,departure,arrival,timee from datas WHERE Name='$name' and Password='$password' and Id='$id'";
$temp3=mysqli_query($con,$query3);
$arr3=mysqli_fetch_array($temp3);
$query4="SELECT balance from bank";
$temp4=mysqli_query($con,$query4);
$arr4=mysqli_fetch_array($temp4);
$arr4[0]=$arr4[0]+$arr3[0];
$query5="UPDATE bank SET balance='$arr4[0]'";
mysqli_query($con,$query5);
echo $arr3[0];
echo "<br>";
echo $datee;
echo "<br>";
echo $timee;

$query6="INSERT INTO transaction (name,amount,datee,timee,actionn) VALUES ('$name','$arr3[0]','$datee','$timee','deposited')";
mysqli_query($con,$query6);


$query7="INSERT INTO confirmed (name,timee,departure,arrival) VALUES ('$name','$arr3[3]','$arr3[1]','$arr3[2]')";
mysqli_query($con,$query7);




header("Location: ticket.php");
}
else{
	echo '<script>alert("Incorrect pinno you will be redirected to payment page")</script>';
	header("Location: pay1.php");
}



?>