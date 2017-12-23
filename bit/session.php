<?php

include ('dbconnect.php');
session_start();
 
$user_check=$_SESSION['user'];
$query1="select * from shop_list where username='$user_check'";
$data1=mysqli_query($conn,$query1);

while($row=mysqli_fetch_array($data1))
{
    $shop_id=$row["shop_id"];
}
if(!isset($user_check))
{
    header('Location: navigation.php');
}

?>
