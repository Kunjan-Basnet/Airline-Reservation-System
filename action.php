<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['password']=$_POST['password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$name=$_POST['name'];
$password=$_POST['password'];
$que1="select name,password from datas where name='$name' and password='$password' ";
$sel1=mysqli_query($con,$que1);
$arr=mysqli_fetch_array($sel1);

if($arr!=NULL){
	header("Location: iindex.php");

}
else{
	?>

	 <script type="text/javascript">
	 	window.history.back();
	 </script>
<?php
}


?>
