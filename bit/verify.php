<?php

session_start();
include('dbconnect.php');

if (!isset($_POST['username']) || !isset($_POST['password']) ) 
{
    header('Location:loginme.php');
}
 
$username=mysql_real_escape_string($_POST["username"]);
$password=mysql_real_escape_string($_POST["password"]);
$query="select * from users where username='$username' and password='$password'";
$data=mysqli_query($conn,$query) or die(mysql_error());
$row=mysqli_fetch_array($data);

if(!$row)
{
    header("Location:loginfail.php");
}
else
{
    $_SESSION['user']=$username;
    header("Location:navigation.php");
}

?>