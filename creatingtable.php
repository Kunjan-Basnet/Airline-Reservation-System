<?php
$con=mysqli_connect('localhost','root','');
$query="CREATE database project";
mysqli_query($con,$query);
mysqli_select_db($con,'project');
$query1="CREATE TABLE `datas` ( `ID` INT(11) NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(60) NOT NULL ,  `Email` VARCHAR(60) NOT NULL ,  `Address` VARCHAR(100) NOT NULL ,  `Password` VARCHAR(15) NOT NULL ,  `Departure` VARCHAR(60) NULL DEFAULT NULL ,  `Arrival` VARCHAR(60) NULL DEFAULT NULL ,  `DepartureDate` VARCHAR(15) NOT NULL ,  `ArrivalDate` VARCHAR(15) NOT NULL ,  `Way` VARCHAR(30) NOT NULL ,  `Cost` INT(50) NOT NULL ,    PRIMARY KEY  (`ID`))";
mysqli_query($con,$query1);
$query2="CREATE TABLE `prices` ( `ID` INT(11) NOT NULL AUTO_INCREMENT ,  `Departure` VARCHAR(60) NOT NULL ,  `Arrival` VARCHAR(60) NOT NULL ,  `Cost` INT(50) NOT NULL ,    PRIMARY KEY  (`ID`))";
mysqli_query($con,$query2);


$query3="INSERT INTO `prices` (`ID`, `Departure`, `Arrival`, `Cost`) VALUES (NULL, 'kathmandu', 'Manchester', '556'),(NULL, 'kathmandu', 'London', '500'), (NULL, 'kathmandu', 'Berlin', '520'),(NULL, 'kathmandu', 'Frankfurt', '530'),(NULL, 'kathmandu', 'Lisbon', '540'),(NULL, 'kathmandu', 'Istanbul', '550'),(NULL, 'kathmandu', 'Delhi', '400'),(NULL, 'berlin', 'Manchester', '500'),(NULL, 'berlin', 'London', '300'),(NULL, 'berlin', 'Berlin', '200'),(NULL, 'berlin', 'Frankfurt', '100'),(NULL, 'berlin', 'Lisbon', '600'),(NULL, 'berlin', 'Istanbul', '300'),(NULL, 'berlin', 'Delhi', '400')";
mysqli_query($con,$query3);

$query4="INSERT INTO `prices` (`ID`, `Departure`, `Arrival`, `Cost`) VALUES (NULL, 'manchester', 'Manchester', '556'),(NULL, 'manchester', 'London', '600'),(NULL, 'manchester', 'Berlin', '100'),(NULL, 'manchester', 'Frankfurt', '400'),(NULL, 'manchester', 'Lisbon', '200'),(NULL, 'manchester', 'Istanbul', '300'),(NULL, 'manchester', 'Delhi', '600'),(NULL, 'london', 'Manchester', '156'),(NULL, 'london', 'London', '500'),(NULL, 'london', 'Berlin', '200'),(NULL, 'london', 'Frankfurt', '300')";
mysqli_query($con,$query4);




?>
