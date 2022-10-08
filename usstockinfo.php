<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet"  href="stockstyle.css" >

</head>
<body>
<div class="img">
  <img src="Images/newlogo.png" alt="" id="logo">
  <h3>ACECAPITAL</h3>
  </div>
    <?php
    $key="7TY619H7IEWKP713";
    $txt="IBM";
    $url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=AAPL&apikey=NBAS526MTFFEPMAH";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    
    echo  '<div class="perf">';
    echo "<h2>";
    echo "Performance"."<br>";
    echo "</h2>";
    echo "52W Low:".$result["52WeekLow"]."<br>";
    echo "52W High:".$result["52WeekHigh"]."<br>";
    echo "50 Day Moving Average:".$result["50DayMovingAverage"]."<br>";
    echo "200 Day Moving Average:".$result["200DayMovingAverage"]."<br>";
    
    echo '</div>';
    
    
    echo  '<div class="Fun">';
    echo "<h2>";
    echo "Fundamentals: "."<br>";
    echo "</h2>";
    echo " ";
    echo "P/E Ratio: ".$result["PERatio"]."<br>";
    echo "EPS(TTM): ".$result["EPS"]."<br>";
    echo "P/B Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo "PB Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo '</div>';
    
    
    echo  '<div class="Abt">';
    echo "<h2>";
    echo "About ".$result["Name"]."<br>";
    echo "</h2>";
    echo $result["Description"]."<br>";
    echo "Founded"."<br>";
    echo "Exchange: ".$result["Exchange"]."<br>";
    echo "Sector: ".$result["Sector"]."<br>";
    echo "Currency: ".$result["Currency"]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '</div>';
    
    ?>










    <?php
    $key="7TY619H7IEWKP713";
    $txt="IBM";
    $url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=MSFT&apikey=NBAS526MTFFEPMAH";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    
    echo  '<div class="perf">';
    echo "<h2>";
    echo "Performance"."<br>";
    echo "</h2>";
    echo "52W Low:".$result["52WeekLow"]."<br>";
    echo "52W High:".$result["52WeekHigh"]."<br>";
    echo "50 Day Moving Average:".$result["50DayMovingAverage"]."<br>";
    echo "200 Day Moving Average:".$result["200DayMovingAverage"]."<br>";
    
    echo '</div>';
    
    
    echo  '<div class="Fun">';
    echo "<h2>";
    echo "Fundamentals: "."<br>";
    echo "</h2>";
    echo " ";
    echo "P/E Ratio: ".$result["PERatio"]."<br>";
    echo "EPS(TTM): ".$result["EPS"]."<br>";
    echo "P/B Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo "PB Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo '</div>';
    
    
    echo  '<div class="Abt">';
    echo "<h2>";
    echo "About ".$result["Name"]."<br>";
    echo "</h2>";
    echo $result["Description"]."<br>";
    echo "Founded"."<br>";
    echo "Exchange: ".$result["Exchange"]."<br>";
    echo "Sector: ".$result["Sector"]."<br>";
    echo "Currency: ".$result["Currency"]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo '</div>';
    
    ?>







    <?php
    $key="7TY619H7IEWKP713";
    $txt="IBM";
    $url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=TSLA&apikey=NBAS526MTFFEPMAH";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    
    echo  '<div class="perf">';
    echo "<h2>";
    echo "Performance"."<br>";
    echo "</h2>";
    echo "52W Low:".$result["52WeekLow"]."<br>";
    echo "52W High:".$result["52WeekHigh"]."<br>";
    echo "50 Day Moving Average:".$result["50DayMovingAverage"]."<br>";
    echo "200 Day Moving Average:".$result["200DayMovingAverage"]."<br>";
    
    echo '</div>';
    
    
    echo  '<div class="Fun">';
    echo "<h2>";
    echo "Fundamentals: "."<br>";
    echo "</h2>";
    echo " ";
    echo "P/E Ratio: ".$result["PERatio"]."<br>";
    echo "EPS(TTM): ".$result["EPS"]."<br>";
    echo "P/B Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo "PB Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo '</div>';
    
    
    echo  '<div class="Abt">';
    echo "<h2>";
    echo "About ".$result["Name"]."<br>";
    echo "</h2>";
    echo $result["Description"]."<br>";
    echo "Founded"."<br>";
    echo "Exchange: ".$result["Exchange"]."<br>";
    echo "Sector: ".$result["Sector"]."<br>";
    echo "Currency: ".$result["Currency"]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo '</div>';
    
    ?>





    <?php
    $key="7TY619H7IEWKP713";
    $txt="IBM";
    $url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=AMZN&apikey=NBAS526MTFFEPMAH";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    
    echo  '<div class="perf">';
    echo "<h2>";
    echo "Performance"."<br>";
    echo "</h2>";
    echo "52W Low:".$result["52WeekLow"]."<br>";
    echo "52W High:".$result["52WeekHigh"]."<br>";
    echo "50 Day Moving Average:".$result["50DayMovingAverage"]."<br>";
    echo "200 Day Moving Average:".$result["200DayMovingAverage"]."<br>";
    
    echo '</div>';
    
    
    echo  '<div class="Fun">';
    echo "<h2>";
    echo "Fundamentals: "."<br>";
    echo "</h2>";
    echo " ";
    echo "P/E Ratio: ".$result["PERatio"]."<br>";
    echo "EPS(TTM): ".$result["EPS"]."<br>";
    echo "P/B Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo "PB Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo '</div>';
    
    
    echo  '<div class="Abt">';
    echo "<h2>";
    echo "About ".$result["Name"]."<br>";
    echo "</h2>";
    echo $result["Description"]."<br>";
    echo "Founded"."<br>";
    echo "Exchange: ".$result["Exchange"]."<br>";
    echo "Sector: ".$result["Sector"]."<br>";
    echo "Currency: ".$result["Currency"]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo '</div>';
    
    ?>




    <?php
    $key="7TY619H7IEWKP713";
    $txt="IBM";
    $url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=JPM&apikey=NBAS526MTFFEPMAH";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    
    echo  '<div class="perf">';
    echo "<h2>";
    echo "Performance"."<br>";
    echo "</h2>";
    echo "52W Low:".$result["52WeekLow"]."<br>";
    echo "52W High:".$result["52WeekHigh"]."<br>";
    echo "50 Day Moving Average:".$result["50DayMovingAverage"]."<br>";
    echo "200 Day Moving Average:".$result["200DayMovingAverage"]."<br>";
    
    echo '</div>';
    
    
    echo  '<div class="Fun">';
    echo "<h2>";
    echo "Fundamentals: "."<br>";
    echo "</h2>";
    echo " ";
    echo "P/E Ratio: ".$result["PERatio"]."<br>";
    echo "EPS(TTM): ".$result["EPS"]."<br>";
    echo "P/B Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo "PB Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo '</div>';
    
    
    echo  '<div class="Abt">';
    echo "<h2>";
    echo "About ".$result["Name"]."<br>";
    echo "</h2>";
    echo $result["Description"]."<br>";
    echo "Founded"."<br>";
    echo "Exchange: ".$result["Exchange"]."<br>";
    echo "Sector: ".$result["Sector"]."<br>";
    echo "Currency: ".$result["Currency"]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo '</div>';
    
    ?>
    <style>
    
    .name {
      font-family: Lora, serif;
      font-weight: bolder;
      font-size: 30px;  
    }
    
    #des1{
      font-family: Ubuntu, sans-serif;
      
      font-size: 15px;  
    }
    </style>

</body>
</html>