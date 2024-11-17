<?php
$page=$_POST['page'];
if ($page=="login") {
	header("Location: llogin.php");
}
else if ($page=="index") {
	header("Location: index.php");
}
else{
	echo "page not found";
}
?>