<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <style type="text/css">
        body{
    margin: 0px;
    background-color: pink;
    font-family: 'Roboto', sans-serif;

    padding: 0;
    
}





.signup-box{
    width: 360px;
    height: 620px;
    margin: auto;
    background-color: white;
    border-radius: 3px;
}

.login-box{
    width: 360px;
    height: 280px;
    margin: auto;
    border-radius: 3px;
    background-color: white;
}

h1{
    text-align: center;
    padding-top: 15px;

}

h4{
    text-align: center;
}
form{
    width: 300px;
    margin-left: 20px;
    font-size: 18px;
}

form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
}

form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;
}

input[type="button"]{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #49c1a2;
    color: white;
    font-size: 18px;
}

p{
    text-align: center;
    padding-top: 20px;
    font-size: 15px;
}

.para-2{
    text-align: center;
    color: white;
    font-size: 15px;
    margin-top: -10px;
}

.para-2 a{
    color: #49c1a2;
}

    </style>
    
</head>
<body>
    
  
<div class="signup-box">
    <h1>Sign Up</h1>
    <h4>It only takes a minute</h4>
    <form action="filltable.php" method="post">
        <label>First Name</label>
        <input type="text" name="name" required>
        <label>Last Name</label>
        <input type="text" placeholder="">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>address</label>
        <input type="text" name="address" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <input type="submit" value="Submit" >
    </form>
    <p>By clicking the Sign Up button, you agree to our<br>
        <a href="#">Terms and Condition</a> and <a href="#">Policy and Privacy</a>

    </p>
</div>


</body>
</html>