<?php
include ('session.php');
$item_id= $_POST["itemid"];
$shop_id= $_POST["shopid"];
if(isset($item_id))
{
    $conn=mysql_connect("localhost", "root", "");
	mysql_select_db('shop');
	$order_id=-1;
	
	$sql1="select MAX(time_of_order)  from orders where username='$login_user' && shop_id='$shop_id'";
	$res1=mysql_query($sql1);
	$row1=mysql_fetch_array($res1);
	$date=$row1["time_of_order"];
	$sql2="CONVERT(VARCHAR(10),'$date',10) ";
	$sql3="CONVERT(VARCHAR(10),'$res5',10)";
	$res2=mysql_query($sql2);
	$res3=mysql_query($sql3);
	
	if($res2==$res3)
	{
	    $sql6="select MAX(order_id)  from orders where username='$login_user' && shop_id='$shop_id'";
		$res6=mysql_query($sql6);
		$order_id=$res6;
	}
	
	{
		$sql4="select MAX(order_id) as value from orders";
		$res4=mysql_query($sql4);
		$row10=mysql_fetch_array($res4);
		$order_id=$row10['value']+1;
	}
	
	$sql = "INSERT INTO  `shop`.`orders` (
		`order_id`,
		`username`,
		`item_id`,
		`shop_id`,
		`qunatity`,
		`isConfirmed`,
		`isFulfilled`,
		`time_of_order`
	)
	VALUES (
	    '$order_id', '$login_user' ,'$item_id',  '$shop_id',  '0',  '0',  '0',  now())";
	
	$result = mysql_query($sql);
}				
	
?>

<html>
<head>
    <title>BIT BAZAR</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <style type="text/css">
    table, td, th{border:1px solid black;}

	table{
	    width:100%;}
	td,th{text-align:center;} 

	td,th{text-align:center;}
    .style1
    {
        width: 100%;
        border: 5px solid #2A85A0;
    }
    .style2
    {
        text-align: center;
        font-weight: bold;
        color: #000099;
        width: 207px;
        height: 22px;
        background-color: #99CCFF;       
    </style>
</head>
    
<body>

	<div class="box">
	<div class="container-fluid">

	<div class="Title">
        <div class="jumbotron">
            <a href="home.php">
                <h1>BIT BAZAR</h1>
            </a> 
            <p><h3>e-commerce website</h3></p>
        </div>
    </div>

    <div class="headerlist">
        <ul class="nav nav-tabs">
            <li><a href="home.php">Home</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        </ul>
    </div>
    <br><br>
    
    <table class="style1">
        <tr>
            <td class="style5">
                YOUR CART <br>(Please confirm your order)
            </td>
        </tr>
    </table>

    <br><br>
    <div class="container-fluid"> 
    <div class="steps11">

<?php

$conn=mysqli_connect("localhost", "root");
mysqli_select_db($conn,'shop');
$sqls = "SELECT * FROM orders where username='$login_user'"; 
$results = mysqli_query($conn,$sqls);

echo "<table><tr><th><h3>item_name</h3></th><th><h3>PRICE</h3></th><th><h3>TIME OF ORDER</h3></th><th><h3>DELETE</h3></th></tr>";
					
while($rows = mysqli_fetch_array($results))
{
    $ask=$rows["item_id"];
	$query="select * from item_list where item_id='$ask'";
	$run=mysqli_query($conn,$query);
	$row_item=mysqli_fetch_array($run);
	
    echo "<tr><td>".$row_item['name']."</td><td>".$row_item['price']."</td><td>".$rows['time_of_order']."</td><td>";
	echo "<form method='POST' action='cart.php'>
	        <input type='submit' value='DELETE'>
		</form></td></tr>";
}

echo "</table>";
echo "<br><BR><form method='POST' action='cart.php'>
			    <input type='submit' value='CONFIRM YOUR ORDER'>
			</form>";

mysqli_close($conn);
?>

    </div></div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <div class="footer">Copyright(c) 2015,BIT Mesra
	<br></div>

</body>
</html>
