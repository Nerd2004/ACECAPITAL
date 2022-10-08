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
    <link rel=”stylesheet” type=”text/css” href=”csvtable.css” title=”style” />
     <script type=”text/javascript” src=”js/jquery-1.4.2.min.js”></script> 
     <script type=”text/javascript” src=”js/jquery.csvToTable.js”></script> 
     <script type=”text/javascript” src=”js/jquery.tablesorter.dev.js”></script>
</head>
<body>
    <div class="first">
    <div class="logonamesearch">
      <div class="logoname">
      <img src="Images/newlogo.png" id="logo">
      <div class=""><h1 id="name">ACECAPITAL</h1></div>
      </div>
        <div class="searchbar">
        <input type="text" placeholder="Search Stocks" class="sb">
        <img src="Images/magnifier.png" id="mag">
        <input type="submit" value="Sign In/Register" class="but" onclick="document.location='register.php'">
        </div>
   </div>
    <div class="tcontainer">
        <div class="upper">
        <div class="tile1">
            <p class="s">STOCKS</p>
            <img src="Images\money-graph-with-up-arrow.png" id="stlogo">
        </div>
        <div class="tile2">
            <p class="m">MUTUAL FUNDS</p>
            <img src="Images/money-bag.png" id="mflogo">
        </div>
        </div>
        <div class="lower">
        <div class="tile3">
            <p class="po">PORTFOLIO</p>
            <img src="Images/pie-cart.png" id="pflogo">
        </div>
        <div class="tile4">
            <p class="pr">PROFILE</p>
            <img src="Images/account.png" id="prlogo">
        </div>
        </div>
    </div>
</div>
<div class="second">
    <div id="tag">
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="rotation.js"></script>
        <script>
        
        $(document).ready(function(){
            var entries=[
                {label:'TATA'},
                {label:'RELIANCE'},
                {label:'HDFC'},
                {label:'INFOSYS'},
                {label:'ICICI'},
                {label:'HUL'},
                {label:'SBI'},
                {label:'BAJAJ'},
                {label:'AIRTEL'},
                {label:'ADANI'},
            ];
            var settings={
                entries:entries,
                width:640,
                height:480,
                radius:'65%',
                radiusMin:75,
                bgDraw:true,
                opacitySpeed:6,
                fov:800,
                speed:2,
                fontFamily:'Courier,Arial,sans-serif',
                fontSize:'30',
                fontColor:'#f00',
                fontWeight:'bold',
                fontStyle:'normal',
                fontSretch:'normal',
                fontToUppercase:true,
            };
            $('#tag').svg3DTagCloud(settings);
        });
        </script>
    </div>
</div>
    <div class="third">
        <div class="slide-container">
            <div class="card1">
                <div class="top"><img src="Images/people/vivek.jpeg" class="dp">
                </div>
                <div class="nameh">
                <p class="names">Vivek Tiwari
                </p>
                <div class="rcorner1">
                </div>
                <div class="rcorner2">
                </div>
            </div>
                <p class="para">
                    Loved the Simplistic UI of the website it made my investing journey much easier
                </p>
                <img src="Images/rating.png" class="star">
            </div>
            <div class="card2">
                <div class="top"><img src="Images/people/suraj.jpeg" class="dp">
                </div>
                <div class="nameh">
                <p class="names">Suraj Prajapati
                </p>
                <div class="rcorner1">
                </div>
                <div class="rcorner2">
                </div>
            </div>
                <p class="para">
                    This website is very beginner friendly I recommend it to everyone who does invest
                </p>
                <img src="Images/rating.png" class="star">
            </div>
            <div class="card3">
                <div class="top"><img src="Images/people/jagjeet.jpeg" class="dp">
                </div>
                <div class="nameh">
                <p class="names">Jagjeet Sappal
                </p>
                <div class="rcorner1">
                </div>
                <div class="rcorner2">
                </div>
            </div>
                <p class="para">
                  This website helped me a lot in making my first ever Investment portfolio
                </p>
                <img src="Images/rating.png" class="star">
            </div>
        </div>
    </div>
    <div id="CSVSource">
    </div>
    <div id="CSVTable">
    </div>
    <input type="file" id="csvFileInput" style="padding-bottom: 15px">
        <table id="csvRoot"></table>
      
      <script src="https://cdn.jsdelivr.net/npm/papaparse@5.2.0/papaparse.min.js"></script>
</body>
</html>