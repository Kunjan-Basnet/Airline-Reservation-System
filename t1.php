<!DOCTYPE html>
<html>
<head>
	<title>Lufthansa</title>
	<link rel="icon" type="image/jpg" href="favcon.jpg">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			font-family: "Monospace";
			background-color: #32a4a8;

		}
		.navbar{
			border: 1px solid  #05164c;
			height: 130px;
			background-color:  #05164c;
			display: flex;
			
			
		}
		.lhome{
			position: absolute;
			top: 12px;
			left: 5px;
		}
		.elements{
	
		width: 700px;
		height: 75px;
		position: absolute;
		top: 12px;
		left: 190px;
			
		}
		.navbar a:link{
			text-decoration: none;
			font-size: 30px;
			color: #51238c;

		}
		.navbar a:hover{
			text-decoration: underline;
			color: green;

		}

		

		.bar{
			height: 50px;
			width: 240px;
			background-color: white;
			display: flex;
			border-radius: 50px;
			position: absolute;
			top: 40px;
			left: 1000px;
			overflow: hidden;
			
		}
		.sbox{
			border: none;
			outline: none;
			border-color: transparent;
			font-size: large;
			font-family: "Monospace";

		}

		.drop{
		border: none;
		outline: none;
		border-color: transparent;
		height: 40px;
		font-size: 25px;
		background-color: #05164c; 
		color: #51238c;	
		}
		.animate{
			width: 1000px;
			height: 500px;
			position: absolute;
			top: 190px;
			left: 170px;
			overflow: hidden;
			animation-name: swiper;
			animation-duration: 30s;
			animation-iteration-count: infinite;
		}
		@keyframes swiper{
			0%{background-image:url("ani1.jpg");background-size: 1000px 500px; }
			10%{background-image:url("ani2.jpg");background-size: 1000px 500px; }
			20%{background-image:url("ani3.jpg");background-size: 1000px 500px; }
			30%{background-image:url("ani4.jpg");background-size: 1000px 500px; }
			40%{background-image:url("ani5.jpg");background-size: 1000px 500px; }
			50%{background-image:url("ani6.jpg");background-size: 1000px 500px; }
			60%{background-image:url("ani7.jpg");background-size: 1000px 500px; }
			70%{background-image:url("ani8.jpg");background-size: 1000px 500px; }
			80%{background-image:url("ani9.jpg");background-size: 1000px 500px; }
			90%{background-image:url("ani10.jpg");background-size: 1000px 500px; }
			100%{background-image:url("ani11.jpg");background-size: 1000px 500px; }
			
		}
		.responsivecard{
			
			width: 1250px;
			height: 400px;
			position: absolute;
			top: 710px;
			left: 30px;
			display: flex;
		}
		.card1{
			
			width: 300px;
			height: 400px;
			border-radius: 50px;
			overflow: hidden; 
			background-color: white;

		}
		.card2{

			width: 300px;
			height: 400px;
			position: relative;
			left: 10px;
			overflow: hidden;
			border-radius: 50px;
			background-color: white;
		}
		.card3{
			
			width: 300px;
			height: 400px;
			position: relative;
			left: 20px;
			overflow: hidden;
			border-radius: 50px;
			background-color: white;
		}
		.card4{
			
			width: 300px;
			height: 400px;
			position: relative;
			left: 40px;
			overflow: hidden;
			border-radius: 50px;
			background-color: white;
		}
		.offer
		{
			width: 100%;
			height: 320px;
			position: absolute;
			top: 1140px;
			background-color: #0af2df;
		}
		.ending{
			width: 100%;
			height: 220px;
			position: absolute;
			top: 1460px;
			background-color: #05164c;
		}
	</style>
	<script type="text/javascript">
		function offer(){
			var hell=document.getElementById("myselect").value;
			if (hell=="Berlin") {
			document.getElementById('price1').innerHTML="$88";
			document.getElementById('price2').innerHTML="$102";
			document.getElementById('price3').innerHTML="$119";
			document.getElementById('price4').innerHTML="$177";
			document.getElementById('price5').innerHTML="$93";
			document.getElementById('price6').innerHTML="$149";
		    }
		    else{
		    document.getElementById('price1').innerHTML="$472";
			document.getElementById('price2').innerHTML="$362";
			document.getElementById('price3').innerHTML="$549";
			document.getElementById('price4').innerHTML="$592";
			document.getElementById('price5').innerHTML="$522";
			document.getElementById('price6').innerHTML="$906";

		    }
		}
	</script>
</head>
<body>
	<div class="navbar">
		<div class="lhome">
			<a href="project.html"><img src="lhome.jpg" height="100px"></a>
		</div>
		<div class="elements">
			<table cellpadding="1" cellspacing="40">
				<td><a href="login.php">Book Flight</a></td>
				<td><a href="project.html">Check Flight</a></td>
				<td>
					<a href="">About Us</a>
				</td>


			</table>
			
		</div>
		
			    <form action="sear.php" method="post" class="bar">
				<input type="text" name="selement" class="sbox" placeholder="Search...">
				<button type="submit"><img src="sea.jpg" height="40px" width="40px"></button>
			    </form>
			
	</div>
	<div style="color: #05164c">
		<h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Let us be part of your Sucess :)</h1>
	</div>
	<div class="animate">
		
	</div>
	<div class="responsivecard">
		<div class="card1">
			<a href="https://www.lufthansa.com/de/de/flexibel-buchen" style="text-decoration: none; color: black;">
			<img src="card1.jpg" width="300" height="190">
			<h1>Make Travel Plans Flexible</h1>
			<p>We offer you maximum flexibility so that you can design your travel plans freely</p>
			</a>
		</div>
		<div class="card2">
			<a href="https://www.lufthansa.com/de/de/digitale-self-services" style="text-decoration: none; color: black;">
			<img src="card2.jpg" width="300" height="190">
			<h1>Digital services</h1>
			<p>Take care of the most important things for your trip from home.</p>
			</a>
		</div>
		<div class="card3">
			<a href="https://www.lufthansa.com/de/de/sixt" style="text-decoration: none; color: black;">
			<img src="card3.jpg" width="300" height="190">
			<h1>Rental car from SIXT</h1>
			<p>Earn five times more award miles in June and July.</p>
			</a>
		</div>
		<div class="card4">
			<a href="https://www.lufthansa.com/de/de/fluege/stadt/salzburg" style="text-decoration: none; color: black;">
			<img src="card4.jpg" width="300" height="190">
			<h1>Discover Salzburg</h1>
			<p>Get to know the country and its people and visit the sights.</p>
			</a>
		</div>
	</div>
	<div class="offer">
		<div style="display: flex;">
			<h1>Flight offers from:</h1>
		    <select id="myselect" style="background-color: #0af2df; border: none; outline: none; border-color: transparent; font-size: large;" onchange="offer()">
			   <option>Kathmandu</option>
			   <option>Berlin</option>
		    </select>
		</div>
		<div style="position: absolute; top: 70px; width: 420px; height: 120px; display: flex;">
			<img src="frankfurt.jpg" style="border-radius: 1000px; height: 100px; width: 100px; position: absolute; top: 9px;">
			<h1 style="position: absolute;top: 20px; left: 110px;">Frankfurt:</h1>
			<p id="price1" style="position: absolute; top: 15px; left: 270px; font-size: 30px;">$472</p>
		</div>
		<div style="position: absolute; top: 70px; left: 440px; width: 420px; height: 120px;">
			<img src="london.jpg" style="border-radius: 1000px; height: 100px; width: 100px; position: absolute; top: 9px;">
			<h1 style="position: absolute;top: 20px; left: 110px;">London:</h1>
			<p id="price2" style="position: absolute; top: 15px; left: 230px; font-size: 30px;">$362</p>
		</div>
		<div style="position: absolute; top: 70px; left: 880px; width: 420px; height: 120px;">
			<img src="manchester.jpg" style="border-radius: 1000px; height: 100px; width: 100px; position: absolute; top: 9px;">
			<h1 style="position: absolute;top: 20px; left: 110px;">Manchester:</h1>
			<p id="price3" style="position: absolute; top: 15px; left: 290px; font-size: 30px;">$549</p>
		</div>
		<div style=" position: absolute; top: 200px; width: 420px; height: 120px;">
			<img src="lisbon.jpg" style="border-radius: 1000px; height: 100px; width: 100px; position: absolute; top: 9px;">
			<h1 style="position: absolute;top: 20px; left: 110px;">Lisbon:</h1>
			<p id="price4" style="position: absolute; top: 15px; left: 220px; font-size: 30px;">$595</p>
		</div>
		<div style="position: absolute; top: 200px; left: 440px; width: 420px; height: 120px;">
			<img src="barcelona.jpg" style="border-radius: 1000px; height: 100px; width: 100px; position: absolute; top: 9px;">
			<h1 style="position: absolute;top: 20px; left: 110px;">Barcelona:</h1>
			<p id="price5" style="position: absolute; top: 15px; left: 270px; font-size: 30px;">$522 </p>
		</div>
		<div style="position: absolute; top: 200px; left: 880px; width: 420px; height: 120px;">
			<img src="dublin.jpg" style="border-radius: 1000px; height: 100px; width: 100px; position: absolute; top: 9px;">
			<h1 style="position: absolute;top: 20px; left: 110px;">Dublin:</h1>
			<p id="price6" style="position: absolute; top: 15px; left: 220px; font-size: 30px;"> $906</p>
		</div>
		
	</div>
	<div class="ending">
		<div style="width: 320px; height: 320px; position: absolute; left: 10px">
			<p style="color: white; font-size: 30px;">Frequently visited pages</p>
			<p style="position: absolute; top: 30px; color: white; width: 3px; ">_______________________________________</p>
			<a href="project.html" style="font-size: 20px; color: white; text-decoration: none;">Register</a><br><br>
			<a href="project" style="font-size: 20px; color: white; text-decoration: none;">Book Flight</a><br><br>
			<a href="project" style="font-size: 20px; color: white; text-decoration: none;">About Us</a><br><br>
		</div>
		<div style="width: 320px; height: 320px; position: absolute; left: 433px">
			<p style="color: white; font-size: 30px;">Customer Service</p>
			<p style="position: absolute; top: 30px; color: white; width: 3px; ">_______________________________________</p>
			<a href="project.html" style="font-size: 20px; color: white; text-decoration: none;">Feedback</a><br><br>
			<a href="project" style="font-size: 20px; color: white; text-decoration: none;">Forum</a><br><br>
			<a href="project" style="font-size: 20px; color: white; text-decoration: none;">Newsletter</a><br><br>

		</div>
		<div style="width: 320px; height: 320px; position: absolute; left: 866px">
			<p style="color: white; font-size: 30px;">Connect With Us</p>
			<p style="position: absolute; top: 30px; color: white; width: 3px; ">_______________________________________</p>
			<a href="project.html" style="font-size: 20px; color: white; text-decoration: none;"><img src="instagram.jpg" style=" width: 20px; height: 20px;border-radius: 100px;">Instagram</a><br><br>
			<a href="project.html" style="font-size: 20px; color: white; text-decoration: none;"><img src="facebook.jpg" style=" width: 20px; height: 20px;border-radius: 100px;">Facebook</a><br><br>
			<a href="project.html" style="font-size: 20px; color: white; text-decoration: none;"><img src="twitter.jpg" style=" width: 20px; height: 20px;border-radius: 100px;">Twitter</a><br><br>
		

		</div>
	</div>
	<div style="height: 110px; width: 100%; background-color: white; position: absolute; top: 1680px; overflow: hidden;">
		<img src="whitelufthansa.jpg" style="width: 340px; height: 90px;">
		<img src="staralliance.jpg" style="float: right; width: 340px; height: 90px;">
	</div>



</body>
</html>