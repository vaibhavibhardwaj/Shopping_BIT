<?php
 
$conn=mysql_connect("localhost","root","admin");
$db=mysql_select_db("p2p");

function profilebook2($profile)
{
    $query="select * from wishlist where profile like '".$profile."';";
    $data=mysql_query($query);
    return $data;
}

?>