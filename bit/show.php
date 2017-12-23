<?php
include ('dbconnect.php');
$order_id=$_POST[order_id];
$sql2="select sum(price*qunatity/default_quantity) as sum from item_list,orders where orders.item_id=item_list.item_id and orders.shop_id=item_list.shop_id and order_id=$order_id
and isFulfilled=1 where orders.order_id=$order_id";
$res2=mysqli_query($conn,$sql2);

if(!$res)
{
    echo "0";
}
else
{
    while($row2=mysqli_fetch_array($res2))
    {
        echo "price=".$row2["sum"];
    }
}

?>