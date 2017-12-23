<?php
 
include('session.php');

$item_id=$_POST["item_id"];
$order_id=$_POST["order_id"];
$query="update orders set isFulfilled=1 where item_id=$item_id and order_id=$order_id and shop_id=$shop_id"; 
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo "error";
}
else 
{
    header("Location:order_list.php");
}

?>





