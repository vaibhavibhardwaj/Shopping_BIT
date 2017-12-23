<?php

include('dbconnect.php');
 
$a=$_POST["name"];
$b=$_POST["price"];
$c=$_POST["unit"];
$d=$_POST["category"];
$e=$_POST["default_quantity"];
$f=$_POST["isAvailable"];
$query="insert into item_list(name,price,unit,category,default_quantity,isAvailable) VALUES('$a','$b','$c','$d','$e','$f')";
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo "error";
}
else
{
    header("Location:item.html");
}

?>