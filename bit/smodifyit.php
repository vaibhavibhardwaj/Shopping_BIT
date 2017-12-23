<?php

include('session.php');

$price=$_POST["price"];
$quantity=$_POST["quantity"];
$item_id=$_POST['item_id'];
$query1 = "select item_id from luxury_table where item_id=$item_id";
$luxuryData=mysqli_query($conn,$query1);
$luxRow=mysqli_fetch_array($luxuryData);

if($luxRow['item_id'] == $item_id)
{
    $query="update luxury_table set default_price='$price',default_quantity='$quantity' where item_id=$item_id";
	$result=mysqli_query($conn,$query);
}
else 
{
    $query="INSERT INTO luxury_table (item_id, shop_id, default_quantity, default_price) VALUES ($item_id,$shop_id,$quantity,$price)";
	$result=mysqli_query($conn,$query);
}

if(!$result)
{
    echo "error";
}
else
{
    header("Location:luxury.php");
}

?>
