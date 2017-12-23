<?php
require_once("dbhelper.php");
	 
$matches = matches("Shreya");
$data = $matches['data'];
$profile = $matches['profile'];
$book=$matches['book'];
echo $profile.'|';
echo $book.'|';
while($row = mysqli_fetch_array($data))
{
    echo $row['bookname'];
}
						   
?>