<?php

include('session.php');

$item_id=$_POST["item_id"];
$query="update item_list set packages=0,quantity=0,sprice=0 where item_id=$item_id"; 
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo "error";
} 
else 
{
    header("Location:luxury.php");
}

?>





