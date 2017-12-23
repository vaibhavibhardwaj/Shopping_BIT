<?php

$conn=mysqli_connect("localhost","root");
$db=mysqli_select_db($conn,"p2p");
$query="select * from books where name='SHREYA' ";
$data=mysqli_query($conn,$query);
     
while($book=mysqli_fetch_array($data))
{
    echo $book["bookname"];
    echo "<br>";
}

echo"<hr>";
echo "<h3>My Books</h3>";

$query="select * from wishlist where name='SHREYA'";
$data=mysqli_query($conn,$query);

while($book=mysqli_fetch_array($data))
{
    echo $book["bookname"];
    echo "<br>";
}

echo"<hr>";
echo "<h3>My Wishlist</h3>";

$query="select * from wishlist where name='SHREYA' ";
$data=mysqli_query($conn,$query);
         
while($book=mysqli_fetch_array($data))
{
    echo $book["bookname"];
}

?>