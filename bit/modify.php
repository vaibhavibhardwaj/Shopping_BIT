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
               Modify Items</td>
           
         </tr></table>

  <br><br>
   <div class="container-fluid"> 
  <div class="steps11"> 
<?php
 
include('dbconnect.php');

?>
<html>

<center>
<h1>MODIFY ITEMS</h1>
</center>
 
<form method="POST" action="modifyit.php">
NAME:
<input type="text" name="name" 
value="<?php

    $item=$_POST['item_id'];
    $query="select name,price,unit,category,default_quantity,isAvailable  from item_list where item_id=$item";
    $data=mysqli_query($conn,$query);
    while($row2=mysqli_fetch_array($data))
    {
        echo $row2["name"];
        $row=$row2;
    }
?>"

size="30">
 
 <br>
 <br>
price:

<input type="number" name="price" 
value="<?php

 $item=$_POST['item_id'];
 echo $row["price"];
 ?>"
 size="30">

<br>
<br>
unit:

<input type="text" name="unit" 
 value="<?php

 $item=$_POST['item_id'];
 echo $row["unit"];
 
 ?>" 
 
 size="10">

<br>
<br>
category:

<input type="number" name="category" 
value="<?php

$item=$_POST['item_id'];

echo $row["category"];

?>
 "size="20">

<br>
<br>

default quantity:

 <input type="float" name="quantity" 
 value="<?php
 
 echo $row["default_quantity"];
 ?>" >
 
 <br>
<br>
isAvailable:

<input type="text" name="isavailable" 
value="<?php

echo $row["isAvailable"];

?>"size="2" >

<br>
<br>
<input type="submit" value="submit">
		<input type='hidden' name='item_id' 
value="<?php

 echo $item;

?>"/>


<br/>

<br/>

</form>

</html>