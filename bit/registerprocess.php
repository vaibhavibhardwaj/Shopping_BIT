<?php

include('dbconnect.php');


$x=$_POST["name"];
$y=$_POST["username"];
$z=$_POST["password"];
$p=$_POST["phone"];
$a=$_POST["aphone"];
$add=$_POST["address"];
$query="insert into users(name,username,password,phone,aphone,address) VALUES('$x','$y','$z','$p','$a','$add')";
$result=mysqli_query($conn,$query);


if(!$result)
{
    echo "error";
}
else
{
    header("Location:login.php");
}

?>