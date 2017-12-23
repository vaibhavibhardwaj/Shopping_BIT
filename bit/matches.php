
<?php

$conn=mysqli_connect("localhost","root");
$db=mysqli_select_db($conn,"p2p");
echo"<hr>";
echo "<h3>My Matches</h3>";
$query="select * from wishlist where name='SHREYA'";
$data=mysqli_query($conn,$query);
while($book=mysqli_fetch_array($data))
{
    echo $book["bookname"];
	$query2="select * from books where bookname=' ".$book['bookname']." ' ";
	$data2=mysqli_query($conn,$query2);

	while($book2=mysqli_fetch_array($data2))
	{
	    echo "<br>";
	    echo "is available with".$book2['name'];
	}
	echo "<br>";
}

echo"<hr>";

?>