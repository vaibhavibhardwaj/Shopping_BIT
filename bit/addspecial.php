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
	
    <a href="navigation.php">
     <h1>BIT BAZAR</h1>
    </a> 
    <p> <h3>e-commerce website</h3></p>
    </div>
    </div>

    <div class="headerlist">
        <ul class="nav nav-tabs">
            <li><a href="navigation.php">Home</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        </ul>
    </div>
    <br><br>
    <br><br>
    <div class="container-fluid"> 
    <div class="steps11"> 
<?php
include('dbconnect.php');
?>
<html>
<center>
<h1><center>ADD ITEMS</h1></center>
<form method="POST" action="addits.php">
    Default Quantity:
    <input type="float" name="quantity" size="30">
    <br><br>
    Price:
    <input type="number" name="price"  size="30">
    <br><br><br><br>
    <input type="submit" value="Submit">
    <input type='hidden' name='item_id' />
    <br/><br/>
</form>
</html>