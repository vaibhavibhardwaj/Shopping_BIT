<?php
 
include('session.php');

$item_id=$_POST["item_id"];
$query="delete from luxury_table where item_id=$item_id"; 
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





