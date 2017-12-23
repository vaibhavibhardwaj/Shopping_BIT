
<?php
include ('session.php');
?>
	
<html>
    <head>
        <title>BIT BAZAR</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <style type="text/css">
        table,td, th{border:1px solid black;}
        
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
            <p> <h3>e-commerce website</h3></p>
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
                SELECT ANY ITEM</td>
        </tr></table>

    <br><br>
    <div class="container-fluid"> 
    <div class="steps11">

<?php

$conn=mysql_connect("localhost", "root", "");
mysql_select_db('shop');
$sql = "SELECT * FROM item_list where shop_id=3"; 
$result = mysql_query($sql);
?>

<?php

while($row = mysql_fetch_array($result)) {

?>

<img src="imageView.php?image_id=<?php echo $row["item_id"]; ?>"  />
<!--style="float: left; width: 10%; margin-right: 1%; margin-bottom: 0.5em;"-->

<?php

    $item=$row["item_id"];
    $shop=$row["shop_id"];

	echo "<br><b>".strtoupper($row["name"]);
	echo "<br><b> Price: ".strtoupper($row["price"]);
	echo "<br>";
	echo "<br>
	<form method='POST' action='orders.php'>
	    <input type='submit' value='ADD TO CART'>
		<input type='hidden' name='itemid' value=\"$item\"/>
		<input type='hidden' name='shopid' value=\"$shop\"/>
	</form>";
    
}

mysql_close($conn);

?>

    </div></div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
	<div class="footer">Copyright(c) 2015,BIT Mesra<br></div>
	
</body>
</html>