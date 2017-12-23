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
                ITEMS IN YOUR SHOP <br>(Can Modify it)
            </td>
        </tr>
    </table>

    <br><br>
    <div class="container-fluid"> 
    <div class="steps11">

<?php

include('session.php');

$user=$_SESSION['user'];
$query="select * from item_list where shop_id=$shop_id and packages=2";       
$data=mysqli_query($conn,$query);
 
if(!$data)
{
    echo "no items present";
}
else
{
    echo "<table><tr><th><h2>item_id</h2></th><th><h2>NAME</h2></th><th><h2>PRICE</h2></th><th><h2>UNIT</h2></th><th><h2>CATEGORY</h2></th><th><h2>DEFAULT-QUANTITY</h2></th><th><h2>AVAILABILITY</h2></th><th><h2>MODIFY</h2></th><th><h2>DELETE</h2></th></tr>";

    while($row=mysqli_fetch_array($data))
    {
        $item_id=$row['item_id'];
        $packages=$row["packages"];
        echo "<tr><td>".$row["item_id"]."</td><td>".$row["name"]."</td><td>".$row["sprice"]."</td><td>".$row["unit"]."</td><td>".$row["category"]."</td><td>".$row["quantity"]."</td><td>".$row["isAvailable"]."</td><td>";
		echo "<br>
		<form method='POST' action='smodify.php'>
		    <input type='submit' value='Modify'>
			<input type='hidden' name='item_id' value=\"$item_id\"/>
			<input type='hidden' name='packages' value=\"$packages\"/>
		</form>
		<br>";
		echo "</td><td>";
		echo "<br>
		<form method='POST' action='deletee.php'>
		    <input type='submit' value='Delete'>
			<input type='hidden' name='item_id' value=\"$item_id\"/>
		</form>
		<br>";
						
		echo "</td></tr>";
                   
    }
}

?>
