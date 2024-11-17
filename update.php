<?php
session_start();
$name=$_SESSION['name'];
$password=$_SESSION['password'];
echo $name;
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$depday=$_POST['depday'];
$arrday=$_POST['arrday'];
$way=$_POST['way'];
$class=$_POST['class'];
$cost=$_POST['cost'];
$timee=$_POST['timee'];
echo $cost;


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Departure,Arrival from datas where Name = '$name' and Password='$password' ";
$temp=mysqli_query($con,$query1);
$check=mysqli_fetch_array($temp);


$query3="SELECT Departure,Arrival,Cost from prices where Departure='$departure' and Arrival='$arrival' ";
$temp2=mysqli_query($con,$query3);
$check2=mysqli_fetch_array($temp2);
if (is_null($check2[0])) {
	echo "your data cannot be found";
	
}
else{
if (is_null($check[0])) {
$query="UPDATE datas SET Departure='$departure',Arrival='$arrival',DepartureDate='$depday',ArrivalDate='$arrday',Way='$way',class='$class',timee='$timee'  WHERE Name = '$name' and Password='$password' ";
mysqli_query($con,$query);
	
}
else{

$query2= "INSERT INTO datas (Name,Password,Departure,Arrival,DepartureDate,ArrivalDate,class,timee) VALUES ('$name', '$password', '$departure','$arrival','$depday','$arrday','$class','$timee')";
mysqli_query($con,$query2);
}

if ($way=="two") {
$cost=$cost + $cost;

}
else{
$cost=$cost;

}

$query4="UPDATE datas SET Cost='$cost' where Name='$name' and Password='$password' and Departure='$check2[0]' and Arrival='$check2[1]' and DepartureDate='$depday' and ArrivalDate='$arrday'";
mysqli_query($con,$query4);
header("Location: flightdetails.php");
}






?>