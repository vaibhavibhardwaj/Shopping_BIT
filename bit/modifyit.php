<?php

include('dbconnect.php');

$a=$_POST["name"];
$b=$_POST["price"];
$c=$_POST["unit"];
$d=$_POST["category"];
$e=$_POST["quantity"];
$f=$_POST["isavailable"];
$item=$_POST['item_id'];
$query="update item_list set name='$a',price='$b',unit='$c',category='$d',default_quantity='$e',isAvailable='$f' where item_id=$item";
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
