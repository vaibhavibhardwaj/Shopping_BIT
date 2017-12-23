<?php
include('dbconnect.php');
session_start();
  
$x=$_POST["bookname"];
$y=$_POST["author"];
$user=$_SESSION['user'];
$query="insert into wishlist(profile,bookname,author) VALUES('$user','$x','$y')";
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo "error";
}
else
{
    header("Location:home.php");
}

?>