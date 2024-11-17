<?php
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Name,Email,Address,Departure,Arrival,class,confirm from datas where ID=$id ";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$name=$arr[0];
$email=$arr[1];
$address=$arr[2];
$departure=$arr[3];
$arrival=$arr[4];
$class=$arr[5];
$confirm=$arr[6];

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="step.php" method="post">
		<label>name:</label>
		<input type="text" name="name" value="<?php echo $name;?>"><br>
		<label>email</label>
		<input type="text" name="email" value="<?php echo $email;?>"><br>
		<label>address</label>
		<input type="text" name="address" value="<?php echo $address;?>"><br>
		<label>departure</label>
		<input type="text" name="departure" value="<?php echo $departure;?>"><br>
		<label>arrival</label>
		<input type="text" name="arrival" value="<?php echo $arrival;?>"><br>
		<label>class</label>
		<input type="text" name="class" value="<?php echo $class;?>"><br>
		<label>confirm</label>
		<input type="text" name="confirm" value="<?php echo $confirm;?>"><br>
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" value="submit">
	</form>

</body>
</html>