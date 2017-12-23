<?php

include('session.php');

$item=$_POST['item_id'];
$query="delete from item_list where item_id=$item and shop_id=$shop_id";
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo "error";
}
else
{
    header("Location:item_list.php");
}

?>
