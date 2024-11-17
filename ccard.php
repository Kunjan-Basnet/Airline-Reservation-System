<?php

$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$query1="select Cost from prices where Departure='$departure' and Arrival='$arrival'";
$temp=mysqli_query($con,$query1);
$arr=mysqli_fetch_array($temp);
$price=$arr[0];
$eprice=$price*1;
$peprice=$price*2;
$bprice=$price*3;
$fprice=$price*4;
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$depday=$_POST['depday'];
$arrday=$_POST['arrday'];
$way=$_POST['way'];
$timee=$_POST['timee'];




?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style type="text/css">
    body{
      background-color: pink;
    }
    .cards{
      display: flex;
    }
    a{
      text-decoration: none;
      color: black;
    }
    .card1:hover{
      box-shadow: 0 0 100px #aaa;
    }
    .card2:hover{
      box-shadow: 0 0 100px #aaa;
    }
    .card3:hover{
      box-shadow: 0 0 100px #aaa;
    }
    .card4:hover{
      box-shadow: 0 0 100px #aaa;
    }

  </style>

</head>
<body>
  <div style="background-color: #05164c; width: 100%; height: 130px; display: flex; overflow: hidden;">
    <a href="#"><img src="lhome.jpg" height="100px"></a>
    <a href="iindex.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 150px; text-decoration: none;">Home</a>
    <a href="flightdetails.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 200px;">View My flights</a>
    <a href="about.php"  style="color: white; font-size: 30px; position: relative; top: 30px; left: 270px;">About Us</a>
    <div style="overflow: hidden; position: relative; left: 720px; top: 15px;">
      <img src="user.jpg" height="50" width="50" style="">
      <h2 style="position: relative;  color: white; "></h2>
    </div>
  </div>
  <div style="height: 50px;"></div>
  <div class="cards" >
    <div style="width: 30px;"></div>
    <div class="card1" style="width: 300px; height: 500px; background-color: white; border-radius: 10px; overflow: hidden;">
      <a href="#">
        <img src="economy.jpg" width="300" height="200">
        <div style="display: flex; ">
        <h2>Economy Class</h2>
        <h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h1>
        <h2 style="color: orange; ">$<?php echo $eprice ;?></h2>
      </div>
      <div style=" width: 215px; height: 160px; overflow: hidden;">
        <p style="font-size: 20px;">Whether it’s a short flight or a long one – comfortable seats await you in Economy Class</p>
      </div>
        <div class="stars" style="height: 30px; display: flex;">
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style=""></i>
          <i class="fa-solid fa-star" style=""></i>
          <i class="fa-solid fa-star"style=""></i>
        
        <form method="post" action="update.php">
          <input type="hidden" name="departure" id="departure" value="<?php echo $departure; ?>">
          <input type="hidden" name="arrival" id="arrival" value="<?php echo $arrival; ?>">
          <input type="hidden" name="depday" id="depday" value="<?php echo $depday; ?>">
          <input type="hidden" name="arrday" id="arrday" value="<?php echo $arrday; ?>">
          <input type="hidden" name="way" id="way" value="<?php echo $way; ?>">
          <input type="hidden" name="cost" id="cost" value="<?php echo $eprice; ?>">
          <input type="hidden" name="class" id="class" value="economy">
          <input type="hidden" name="timee" id="timee" value="<?php echo $timee; ?>">

          <input type="submit" name="" value="book" style="position: relative; left: 120px; height: 30px; width: 80px; border-radius: 7px; border: none; background-color: #1b1d2e; color: white;">
        </form>
      </div>
      </a>
      
    </div>
    <div style="width: 20px;"></div>
    <div class="card2" style="width: 300px; height: 500px; background-color: white; border-radius: 10px; overflow: hidden;">
      <a href="#">
        <img src="peconomy.jpg" width="300" height="200">
        <div style="display: flex;">
        <h2>Pre Economy </h2>
        <h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h1>
        <h2 style="color: orange;">$<?php echo $peprice ; ?></h2>
      </div>
      <div style=" width: 215px; height: 160px; overflow: hidden;">
        <p style="font-size: 20px;">More space, more free baggage, more service – long-haul flights in Premium Economy Class offer plenty of comforts</p>
      </div>
      <div class="stars" style="height: 30px; display: flex;">
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style=""></i>
          <i class="fa-solid fa-star"style=""></i>
        <form method="post" action="update.php">
          <input type="hidden" name="departure" id="departure" value="<?php echo $departure; ?>">
          <input type="hidden" name="arrival" id="arrival" value="<?php echo $arrival; ?>">
          <input type="hidden" name="depday" id="depday" value="<?php echo $depday; ?>">
          <input type="hidden" name="arrday" id="arrday" value="<?php echo $arrday; ?>">
          <input type="hidden" name="way" id="way" value="<?php echo $way; ?>">
          <input type="hidden" name="cost" id="cost" value="<?php echo $peprice; ?>">
          <input type="hidden" name="class" id="class" value="premium economy">
          <input type="hidden" name="timee" id="timee" value="<?php echo $timee; ?>">
          <input type="submit" name="" value="book" style="position: relative; left: 120px; height: 30px; width: 80px; border-radius: 7px; border: none; background-color: #1b1d2e; color: white;">
        </form>
      </div>
      </a>
      
    </div>
    <div style="width: 20px;"></div>
    <div class="card3" style="width: 300px; height: 500px; background-color: white; border-radius: 10px; overflow: hidden;">
      <a href="#">
        <img src="business.jpg" width="300" height="200">
        <div style="display: flex;">
        <h2>Business Class</h2>
        <h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h1>
        <h2 style="color: orange;">$<?php echo $bprice ;?></h2>
      </div>
      <div style=" width: 215px; height: 160px; overflow: hidden;">
        <p style="font-size: 20px;">The new Lufthansa Business Class seat can be converted into a fully flat bed  – just the thing for relaxing during a long flight</p>
      </div>
      <div class="stars" style="height: 30px; display: flex;">
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star"style=""></i>
        <form method="post" action="update.php">
          <input type="hidden" name="departure" id="departure" value="<?php echo $departure; ?>">
          <input type="hidden" name="arrival" id="arrival" value="<?php echo $arrival; ?>">
          <input type="hidden" name="depday" id="depday" value="<?php echo $depday; ?>">
          <input type="hidden" name="arrday" id="arrday" value="<?php echo $arrday; ?>">
          <input type="hidden" name="way" id="way" value="<?php echo $way; ?>">
          <input type="hidden" name="cost" id="cost" value="<?php echo $bprice; ?>">
          <input type="hidden" name="class" id="class" value="Business">
          <input type="hidden" name="timee" id="timee" value="<?php echo $timee; ?>">
          <input type="submit" name="" value="book" style="position: relative; left: 120px; height: 30px; width: 80px; border-radius: 7px; border: none; background-color: #1b1d2e; color: white;">
        </form>
      </div>
      </a>
      
    </div>
    <div style="width: 20px;"></div>
    <div class="card4" style="width: 300px; height: 500px; background-color: white; border-radius: 10px; overflow: hidden;">
      <a href="#">
        <img src="firstclass.jpg" width="300" height="200">
        <div style="display: flex;">
        <h2>First Class</h2>
        <h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </h1>
        <h2 style="color: orange;">$<?php echo $fprice ;?></h2>
      </div>
      <div style=" width: 215px; height: 160px; overflow: hidden;">
        <p style="font-size: 20px;">we shape your travel experience with great attention to detail and with your personal wishes in mind</p>
      </div>
      <div class="stars" style="height: 30px; display: flex;">
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star" style="color: yellow;"></i>
          <i class="fa-solid fa-star"style="color: yellow;"></i>
        <form method="post" action="update.php">
          <input type="hidden" name="departure" id="departure" value="<?php echo $departure; ?>">
          <input type="hidden" name="arrival" id="arrival" value="<?php echo $arrival; ?>">
          <input type="hidden" name="depday" id="depday" value="<?php echo $depday; ?>">
          <input type="hidden" name="arrday" id="arrday" value="<?php echo $arrday; ?>">
          <input type="hidden" name="way" id="way" value="<?php echo $way; ?>">
          <input type="hidden" name="cost" id="cost" value="<?php echo $fprice; ?>">
          <input type="hidden" name="class" id="class" value="First Class">
          <input type="hidden" name="timee" id="timee" value="<?php echo $timee; ?>">
          <input type="submit" name="" value="book" style="position: relative; left: 120px; height: 30px; width: 80px; border-radius: 7px; border: none; background-color: #1b1d2e; color: white;">
        </form>
      </div>
      </a>
    </div>
    

</body>
</html>