<html>
  <head>
   <title>
   BIT BAZAR
   </title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
       <style type="text/css">
        table, td, th{border:1px solid black;}
		 
		 
				table{
				width:100%;}
				td,th{text-align:center;} 




			td,th{text-align:center;}
          .style1
          {
              width: 100%;
              border: 5px solid #2A85A0;
          }
          .style2
          {
              text-align: center;
              font-weight: bold;
              color: #000099;
              width: 207px;
              height: 22px;
              background-color: #99CCFF;       
</style>
</head>
<body>

	<div class="box">
	<div class="container-fluid">

	<div class="Title">
   <div class="jumbotron">
	
    <a href="navigation.php">
     <h1>BIT BAZAR
     </h1>
    </a> 
   <p> <h3>e-commerce website</h3></p>
   </div>
</div>

<div class="headerlist">
<ul class="nav nav-tabs">
<li><a href="navigation.php">Home</a></li>
<li><a href="logout.php">LOG OUT</a></li>
</ul>

</div>
<br><br>

<table class="style1">
         <tr>
             <td class="style5">
               Modify Items</td>
           
         </tr></table>

  <br><br>
   <div class="container-fluid"> 
  <div class="steps11"> 

<?php

include('dbconnect.php');
?>


 <html>
 <center>
 <h1>MODIFY ITEMS</h1>
 </center>
 <form method="POST" action="smodifyit.php">

 NAME:
 <input type="text" name="name" 
 value="<?php
  
  
  $item=$_POST['item_id'];

 $query="select name,sprice,unit,category,quantity,isAvailable  from item_list where item_id=$item";

 $data=mysqli_query($conn,$query);

         while($row2=mysqli_fetch_array($data))

          {
             echo $row2["name"];
             $row=$row2;

              
          }

?>" 
size="30">
  
  <br>
  <br>

price:
<input type="number" name="price" value=
"<?php

$item=$_POST['item_id'];


echo $row["sprice"];
  
  ?>" 
  
  size="30">

<br>
<br>
unit:
  
  <input type="text" name="unit" value="
  <?php
   $item=$_POST['item_id'];
   echo $row["unit"];

?>"
  size="10">

<br>
<br>
category:

  <input type="number" name="category" value="
<?php

$item=$_POST['item_id'];

echo $row["category"];

?>"
  size="20">

<br>
<br>
default quantity:

 <input type="float" name="quantity" value="
 <?php
   
   echo $row["quantity"];
  ?>"
  >

<br>
<br>
isAvailable:
<input type="text" name="isavailable" value="<?php

echo $row["isAvailable"];
?>"size="2" >

<br>
<br>

<?php

$packages=$_POST["packages"];

?>


<input type="submit" value="submit">
		<input type='hidden' name='item_id' value=
		"<?php

          echo $item;

         ?>"/>

<br/>
<br/>
</form>
</html>