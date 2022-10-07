<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$stocks=array("JSWSTEEL.BSE","COALINDIA.BSE","HINDALCO.BSE","TATASTEEL.BSE","LT.BSE");

$arrlength=count($stocks);

echo "<table  id='customers' border='1'><tr><th>Symbol</th><th>Open</th><th>High</th><th>Low</th><th>Price</th><th>Volume</th><th>Latest Trading Day </th><th>Previous Close</th><th>Change</th><th>Change Percent</th></tr>";
for($x=0;$x<$arrlength;$x++){
$url="https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=".$stocks[$x]."&apikey=7TY619H7IEWKP713";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
if(isset($result['Global Quote']))
{
	echo "<tr>";
	foreach($result['Global Quote'] as $key=>$val){
    echo "<td>$val</td>";	}
    echo "</tr>";
	
}

}
echo "</table>";
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
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<a href="new.php">More...</a>
</body>
</html>