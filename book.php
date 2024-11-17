<?php
session_start();

echo $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book flight</title>
	<style type="text/css">
		body{
			background-image: url(back.jpg);
		}
	</style>
	<script type="text/javascript">
		function populate(){
			var s1 = document.getElementById('departure');
			var s2 = document.getElementById('arrival');
			s2.innerHTML="";
			if (s1.value == "Kathmandu" ) {
				var optionArray = ['delhi|delhi','london|london','Manchester|Manchester','Berlin|Berlin','Frankfut|Frankfut','Lisbon|Lisbon','Istanbul|Istanbul'];
			}
			for(var option in optionArray){
				var pair=optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value = pair[0];
				newoption.innerHTML=pair[1];
				s2.options.add(newoption);
			}
			if (s1.value == "berlin" ) {
				var optionArray = ['delhi|delhi','london|london','Manchester|Manchester','Berlin|Berlin','Frankfut|Frankfut','Lisbon|Lisbon','Istanbul|Istanbul'];
			}
			for(var option in optionArray){
				var pair=optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value = pair[0];
				newoption.innerHTML=pair[1];
				s2.options.add(newoption);
			}
			if (s1.value == "Manchester" ) {
				var optionArray = ['delhi|delhi','london|london','Manchester|Manchester','Berlin|Berlin','Frankfut|Frankfut','Lisbon|Lisbon','Istanbul|Istanbul'];
			}
			for(var option in optionArray){
				var pair=optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value = pair[0];
				newoption.innerHTML=pair[1];
				s2.options.add(newoption);
			}
			if (s1.value == "London" ) {
				var optionArray = ['london|london','Manchester|Manchester','Berlin|Berlin','Frankfut|Frankfut'];
			}
			for(var option in optionArray){
				var pair=optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value = pair[0];
				newoption.innerHTML=pair[1];
				s2.options.add(newoption);
			}

		}

	</script>
</head>
<body>
	<form method="post" action="ccard.php">
		<p style="position: absolute; left: 500px; font-size: large">Thank you very much for choosing lufthansa</p>
	<div style="height: 490px; width: 750px; position: absolute; left: 300px; top: 70px; background-color:  #05164c;">
		<div style="width: 750px; height: 100px; position: absolute; top: 30px; display: flex; overflow: hidden;">
			<select id="departure" placeholder="From" name="departure" onchange="populate()" style="width: 330px; height: 100%; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 40px;">
				<option>Departure </option>
				<option>Kathmandu</option>
				<option>London</option>
				<option>Berlin</option>
				<option>Manchester</option>

			</select>
			<img src="airplane.jpg" style="width: 70px; height: 70px; border-radius: 200px; position: absolute; left: 340px; top: 10px;">
			<select  placeholder="To" name="arrival" id="arrival" style="width: 330px; height: 100%; background-color: #05164c; position: absolute; left:420px; outline: none; border: none; border-color: transparent; font-size: 40px; ">
			</select>
		</div>
		<p style="position: absolute; top: 80px; ">_________________________________________</p>
		<p style="position: absolute; top: 80px; left: 420px; ">_________________________________________</p>
		<input type="radio" name="way" id="oneway" value="one" style="width: 30px; height: 30px; position: absolute; top: 160px;" >
		<label for="oneway" style="position: absolute; top: 160px; left: 70px; font-size: 30px;"><img src="1way.png" height="30px"> One way</label>
		<input type="radio" name="way" id="twoway" value="two" style="width: 30px; height: 30px; position: absolute; top: 210px;" >
		<label for="oneway" style="position: absolute; top: 210px; left: 70px; font-size: 30px;">Two way</label>
		<p style="position: absolute; top: 250px; font-size: 20px;">Departure date(yyyy/mm/dd):</p>
		<input type="date" min="2023-02-16" placeholder="Departure date (yyyy/mm/dd)" name="depday" style="width: 400px; height: 60px; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 30px; position: absolute; top: 300px;">
		<p style="position: absolute; top: 320px; ">_________________________________________________</p>
		<p style="position: absolute; top: 370px; font-size: 20px;">Arrival date(yyyy/mm/dd):</p>
		<input type="date" min="2023-02-16" placeholder="Arrival date (yyyy/mm/dd)" name="arrday" style="width: 400px; height: 60px; background-color: #05164c; outline: none; border: none; border-color: transparent; font-size: 30px; position: absolute; top: 420px;">
		<p style="position: absolute; top: 440px; ">_________________________________________________</p>
		<input type="submit" name="" value="Continue" style="position: absolute; top: 440px; left: 640px; background-color: #fcba03; width: 110px; height: 50px; border-radius: 9px;">
		
	</div>
	 
	</form>
	

</body>
</html>