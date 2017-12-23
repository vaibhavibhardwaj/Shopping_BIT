<?php

include_once('master_login.inc');
  
$conn=mysqli_connect($address,$username,$password);
$db=mysqli_select_db($conn,$database);

?>