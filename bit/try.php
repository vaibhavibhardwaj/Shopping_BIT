<html>
<center>
<h1>ENTER ITEMS</h1>
</center>
<form method="POST" action="modifyit.php">
 NAME:
<input type="text" name="name" 
value=
"<?php
 
 include('dbconnect.php');
 session_start();

  $item=$_SESSION['item'];
  $query="select name from item_list where item_id=$item";
  $data=mysqli_query($conn,$query);

       while($row=mysqli_fetch_array($data))
       {
             echo $row["name"];
           
       }
 ?>" 


size="30">
<br>
price:


<input type="number" name="price" value=
 "<?php
 
 include('dbconnect.php');
 
 $query="select price from item_list where item_id=$item";
 $data=mysqli_query($conn,$query);


 
 while($row=mysqli_fetch_array($data))
 {
    echo $row["price"];
 }

?>" 
 size="30">
<br>
unit:
<input type="text" name="unit" value=
"<?php

 include('dbconnect.php');
 
 $item=$_SESSION['item'];
 $query="select unit from item_list where item_id=$item";
 $data=mysqli_query($conn,$query);
 
 while($row=mysqli_fetch_array($data))
 {
    echo $row["unit"];
 }
 
 ?>" 
size="10">
<br>
category:

<input type="number" name="category" value=
"<?php
 
 include('dbconnect.php');

 $item=$_SESSION['item'];
 $query="select category from item_list where item_id=$item";
 $data=mysqli_query($conn,$query);

 while($row=mysqli_fetch_array($data))
 {
    echo $row["category"];
 }

?>"
size="20">
<br>
default quantity:
<input type="float" name="quantity" value=
"<?php

 include('dbconnect.php');

  
 $item=$_SESSION['item'];
 $query="select default_quantity from item_list where item_id=$item";
 $data=mysqli_query($conn,$query);

 while($row=mysqli_fetch_array($data))
 {
    echo $row["default_quantity"];
 }

?>" >



<br>
isAvailable:
<input type="text" name="isavailable" value=
"<?php
 
 include('dbconnect.php');

 $item=$_SESSION['item'];
 $query="select isAvailable from item_list where item_id=$item";
 $data=mysqli_query($conn,$query);
 
 while($row=mysqli_fetch_array($data))
 {
    echo $row["isAvailable"];
 }

?>"
size="2" >
<br>

<input type="submit" value="submit">
<br/>
<br/>

</form>
</html>