<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" width="width-display initial-scale=1.0">
    <title>ACECAPITAL</title>
</head>
<body>
    <section class="first">
    <div class="logonamesearch">
      <div class="logoname">
      <img src="Images/newlogo.png" id="logo">
      <div class=""><h1 id="name">ACECAPITAL</h1></div>
      </div>
        <div class="searchbar">
        <input type="text" placeholder="Search Stocks" class="sb">
        <img src="Images/magnifier.png" id="mag">
       <!-- <input type="submit" value="Sign In/Register" class="but"> -->
       <!--<button type="submit" class="but" name="btn"><a href="/register.php">Login/Register</a></button>-->
        </div>
   </div>
    <div class="tcontainer">
        <div class="tile1"> STOCKS 
            <img src="Images\money-graph-with-up-arrow.png" id="stlogo">
        </div>
        <div class="tile2">MUTUAL FUNDS
            <img src="Images/money-bag.png" id="mflogo">
        </div>
        <div class="tile3">PORTFOLIO
            <img src="Images/pie-cart.png" id="pflogo">
        </div>
        <div class="tile4">PROFILE
            <img src="Images/account.png" id="prlogo">
        </div>
    </div>
    </section>
    <section class="second">
        <h>This is 2nd page</h>
    </section>
</body>
</html>