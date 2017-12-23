<?php

include('session.php');

$b=$_POST["price"];
$e=$_POST["quantity"];
$shop=$shop_id;
$item_id=$_POST["item_id"];

echo $item_id;
echo $shop_id;

$query="insert into item_list (quantity,sprice) values('$e','$b') where item_id=$item_id";
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo "error";
}
else
{
    header("Location:additem.php");
}

?>
