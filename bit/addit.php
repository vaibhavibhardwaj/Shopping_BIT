<?php

include('session.php');

$a=$_POST["name"];
$b=$_POST["price"];
$c=$_POST["unit"];
$d=$_POST["category"];
$e=$_POST["quantity"];
$f=$_POST["isavailable"];
$item=$_POST['item_id'];
$shop=$shop_id;

   
if($_POST["packages"]!=0)
{
    $p=$_POST["packages"];
    $q=$_POST["squantity"];
    $r=$_POST["sprice"];
}
else
{
    $p=0;
    $q=0;
    $r=0;
}

$query="insert into item_list (shop_id,name,price,unit,category,default_quantity,isAvailable,packages,quantity,sprice) values('$shop','$a','$b','$c','$d','$e','$f','$p'     ,'$q','$r')";
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
