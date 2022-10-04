<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">

</head>
<body>
    <?php
$key="7TY619H7IEWKP713";
$txt="IBM";
$url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=IBM&apikey=".$key;
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
$url1="https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=IBM&apikey=".$key;
$ch1=curl_init();
curl_setopt($ch1,CURLOPT_URL,$url1);
curl_setopt($ch1,CURLOPT_RETURNTRANSFER,true);
$result1=curl_exec($ch1);
curl_close($ch1);
$result1=json_decode($result1,true);
echo  '<div class="perf">';
echo "Performance"."<br>";
echo "Today's Low:";
echo "Today's High:";
echo "52W Low:";
echo "52W High:";
echo "Open Price:";
echo "Prev. Close";
echo "Volume";
echo "Value";
echo '</div>';


echo  '<div class="Fun">';
echo "Fundamentals: "."<br>";
echo "Market Cap";
echo "ROE";
echo "P/E Ratio: ".$result["PERatio"]."<br>";
echo "EPS(TTM): ".$result["PERatio"]."<br>";
echo "P/B Ratio: ".$result["PriceToBookRatio"]."<br>";
echo "PB Ratio: ".$result["PriceToBookRatio"]."<br>";
echo "Book Value: ".$result["PriceToBookRatio"]."<br>";
echo '</div>';


echo  '<div class="Abt">';
echo "About ".$result["Name"];
echo $result["Description"]."<br>";
echo "Founded";
echo "NSE Symbol";
echo '</div>';

?>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  
  text-align: center;
  background-color: #4CAF50;
  color: white;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 40px;

}
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