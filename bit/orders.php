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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

    <br><br>
    <div class="container-fluid"> 
    <div class="steps11"> 
	<?php
	include ('session.php');
	
	$sql1="select order_id,username from orders where  shop_id=$shop_id and 
					isFulfilled=0 group by order_id order by time_of_order";
	$res1=mysqli_query($conn,$sql1);
					
	if(!$res1)
	{
	    echo "no orders";
	}
	else
	{
	    echo "<table width=100%><tr><th><h3>order_id</h3></th><th><h3>USERNAME</h3></th><th><h3>PRICE</h3></th><th><h3>SEE ORDER</h3></th></tr>";
		
		while($row1=mysqli_fetch_array($res1))
		{
		    $order_id=$row1["order_id"];

            $sql2="select sum(price*qunatity) as sum from item_list,orders where orders.item_id=item_list.item_id and orders.shop_id=item_list.shop_id and order_id=$order_id
and isFulfilled=0";
            $res2=mysqli_query($conn,$sql2);
 
            while($row2=mysqli_fetch_array($res2))
            {
                echo "<tr><td>".$row1["order_id"]."</td><td>".$row1["username"]."</td><td>".$row2["sum"]."</td><td>";
            }

            echo "<br><form method='POST' action='order_list.php'>
							<input type='submit' value='See Order'>
							<input type='hidden' name='order_id' value=\"$order_id\"/>
		                    </form>";
	            
	        echo "</td></tr>";
			$_SESSION['order']='';
        }
    }			

?>