<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="navigation.php">BIT BAZAAR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="navigation.php">HOME</a>
                    </li>
                    <li class="nav navbar-nav navbar-right">
                        <a href="logout.php">LOG OUT</a>
                    </li>
                 
       
          
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
       <style type="text/css">
        table, td, th{border:1px solid black;}
		 
		 
				table{
				align:center;
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

    <br><br>

    <table class="style1">
        <tr>
            <td class="style5">
                ORDERS FULFILLED </td>
        </tr></table>

    <br><br>
    <div class="container-fluid"> 
    <div class="steps11"> 
<?php

include('session.php');

$sql1="select * from orders where  shop_id=$shop_id  
        and 
		isFulfilled=1 order by order_id desc";
$res1=mysqli_query($conn,$sql1);
echo "<br>";

if(!$res1)
{
    echo "no orders";
}
else
{
    echo "<table><tr><th><h2>order_id</h2></th><th><h2>item_id</h2></th><th><h2>QUANTITY</th></h2><th><h2>PRICE</h2></th><th><h2>IS_CONFIRMED</h2></th><th><h2>TIME_OF_ORDER</h2></th></tr>";

    while($row1=mysqli_fetch_array($res1))
	{
	    $order_id=$row1["order_id"];
        $item_id=$row1["item_id"];
        $sql2="select (price*qunatity/default_quantity) as sum from item_list,orders where  orders.item_id=$item_id
            and orders.shop_id=item_list.shop_id and orders.item_id=item_list.item_id and order_id=$order_id 
            and isFulfilled=1 " ;

        $res2=mysqli_query($conn,$sql2);
        
        while($row2=mysqli_fetch_array($res2))
        {
            echo "<tr><td>".$row1["order_id"]."</td><td>".$row1["item_id"]."</td><td>".$row1["qunatity"]."</td><td>".$row2["sum"]."</td><td>".$row1["isConfirmed"]."</td><td>".$row1["time_of_order"]."</td>";
        }
    }
}

?>