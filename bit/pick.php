<html>
  <head>
   <title>
   BIT BAZAR
   </title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
       <style type="text/css">
         table,td, th{border:1px solid black;}
table{
width:100%;}
td,th{text-align:center;}      
</style>
</head>
<body>

	<div class="box">
	<div class="container-fluid">

	<div class="Title">
   <div class="jumbotron">
	
    <a href="home.php">
     <h1>BIT BAZAR
     </h1>
    </a> 
   <p> <h3>e-commerce website</h3></p>
   </div>
</div>

<div class="headerlist">
<ul class="nav nav-tabs">
<li><a href="home.php">Home</a></li>
</ul>
</div>
<?php

$shopno=$_POST["shopno"];

mysql_connect("localhost", "root", "");
mysql_select_db('item');

if($shopno=='1')
    $shopno=4;
else if($shopno=='2')
    $shopno=3;

$q="select name,price from item_list where shop_id=$shopno";
$res=mysql_query($q);
$s=0;

while ($row=mysql_fetch_array($res))
{
    $arr[$s]=$row[0];
	$arr1[$s]=$row[1];
    $s++;
}

$rank=0;
$r=0;

echo "<b><table><tr><td>serial no.      </td><td> item name            </td><td> price     </td></tr></b><br><br><br>";
 
for($x=0;$x<$s;$x++) 
{
    $rank++;
		 
	echo "<b><tr><td>      ".$rank.".</td><td>     ".$arr[$x]." </td><td>     ".$arr1[$x]."</td></tr></table></b>";
    echo "<br>";
}
 
?>
</html>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<div class="footer">Copyright(c) 2015,BIT Mesra
<br>
</div>
    
</body>
</html>