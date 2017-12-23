<?php

if(count($_FILES) > 0) 
{
	
	$shop_id=(int)$_POST["shop_id"];
	$name=$_POST["name"];
	$price=(int)$_POST["price"];
	$isAvail=$_POST["isAvail"];
	$unit=$_POST["unit"];
	$quantity=(float)$_POST["quantity"];
	$cat=(int)$_POST["category"];
	
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) 
	{
        mysql_connect("localhost", "root", "");
		mysql_select_db ("shop");
		$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
		$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
		
		$sql = "INSERT INTO item_list(shop_id,name,price,isAvailable,imageType,imageData,unit,category,default_quantity)
		    VALUES('$shop_id','$name','$price','$isAvail','{$imageProperties['mime']}', '{$imgData}','$unit','$cat','$quantity')";
        $current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
    }
}
?>
<HTML>
<HEAD>
    <TITLE>Upload Image to MySQL BLOB</TITLE>
    <link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
    <h1>ENTER ITEM DETAILS </h1>
    <br><br>
	<form name="frmImage" enctype="multipart/form-data" action="image_upload.php" method="post" class="frmImageUpload">
    	enter shop id: <br>
    	<input type="text" name="shop_id"><br>
    	
    	enter item name: <br>
    	<input type="text" name="name"><br>
    	
    	enter item price: <br>
    	<input type="text" name="price"><br>
    	
    	enter item units(kg/ps): <br>
    	<input type="text" name="unit"><br>
    	
    	enter item default quantity: <br>
    	<input type="text" name="quantity"><br>
    	
    	enter item category: <br>
    	<input type="text" name="category"><br>
    	
    	enter isAvailable: <br>
    	<input type="text" name="isAvail"><br><br>
    	
    	<label>Upload Image File:</label><br/>
    	<input name="userImage" type="file" class="inputFile" /><br><br>
    	
    	<input type="submit" value="Submit" class="btnSubmit" />
	</form>
</div>
</BODY>
</HTML>