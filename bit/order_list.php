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
                ITEMS IN YOUR SHOP <br>(Can Modify it)</td>
        </tr>
    </table>

    <br><br>
    <div class="container-fluid"> 
    <div class="steps11"> 

    <?php
	include ('session.php');

	if($_SESSION['order']=='')
	{
        $_SESSION['order']=$_POST['order_id'];
        $order_id=$_POST['order_id'];
	}	
	else
    {
        $order_id=$_SESSION['order'];
    }	
	
	$sql1="select * from orders where  shop_id=$shop_id  
					and order_id=$order_id and 
					isFulfilled=0 order by time_of_order";
	$res1=mysqli_query($conn,$sql1);
			
	if(!$res1)
	{
        echo "no orders";
    }
    else
	{
	    echo "<table><tr><th><h3>Item_Name</h3></th><th><h3>QUANTITY</h3></th><th><h3>PRICE</h3></th><th><h3>IS_CONFIRMED</h3></th><th><h3>IS_FULFILLED</h3></th><th><h3>TIME_OF_ORDER</h3></th><th><h3>FULFILL_ORDER</h3></th><th><h3>DELETE_ORDER</h3></th></tr>";
        while($row1=mysqli_fetch_array($res1))
        {
            $item_id=$row1["item_id"];
            $item_table_query = "select * from item_list where item_id = $item_id ";
            $item_result=mysqli_query($conn,$item_table_query) or die(mysql_error());
            $item_row = mysqli_fetch_array($item_result);
            $item_name = $item_row['name'];

            $sql2="select (price*qunatity/default_quantity) as sum from item_list,orders where orders.item_id=$item_id
       and orders.shop_id=item_list.shop_id and orders.item_id=item_list.item_id and order_id=$order_id 
       and isFulfilled=0";
 
            $res2=mysqli_query($conn,$sql2);

            while($row2=mysqli_fetch_array($res2))
            {
                echo "<tr><td>".$item_name."</td><td>".$row1["qunatity"]."</td><td>".$row2["sum"]."</td><td>".$row1["isConfirmed"]."</td><td>".$row1["isFulfilled"]."</td><td>".$row1["time_of_order"]."</td><td>";
            }

            echo "<br><form method='POST' action='fulfill.php'>
      							<input type='submit' value='Fulfill Order'>
      							<input type='hidden' name='order_id' value=\"$order_id\"/>
      							<input type='hidden' name='item_id' value=\"$item_id\"/>
      		</form><br>";
    	    echo "</td><td>";
  		    echo "<br><form method='POST' action='delete.php'>
      							<input type='submit' value='Delete'>
      						<input type='hidden' name='item_id' value=\"$item_id\"/>
      										<input type='hidden' name='order_id' value=\"$order_id\"/>
      							</form><br>
      							</td></tr>";
        }
	}

?>
