<?php

function profilewishlist($profile)
{
    $conn=mysqli_connect("localhost","root");
    $db=mysqli_select_db($conn,"p2p");
    $query="select * from wishlist where profile like '".$profile."';";
    $data=mysqli_query($conn,$query);
    return $data;
}

function profilebook($profile)
{
    $conn=mysqli_connect("localhost","root");
    $db=mysqli_select_db($conn,"p2p");
    $query="select * from books where profile like '".$profile."';";
    $data=mysqli_query($conn,$query);
    return $data;
}

function matches($pro)
{
    $conn=mysqli_connect("localhost","root");
    $db=mysqli_select_db($conn,"p2p");
    $query="select * from books where bookname in (select bookname from wishlist where profile='$pro')";
    $data=mysqli_query($conn,$query);
    $profile="";
    $bookname="";
    $profilebooks=array();

    while($row = mysqli_fetch_array($data))
    {
        $profile=$row['profile'];
        $bookname=$row['bookname'];
        $query2="select bookname from books where profile='$pro' and  bookname in (select bookname from wishlist where profile='$profile')";
        $data2=mysqli_query($conn,$query2);
        $pb=array('profile'=>$profile,'bookname'=>$bookname,'data'=>$data2);
        array_push($profilebooks,$pb);
    }
    
    $datas = array('profile'=>$profile,'data'=>$data2,'book'=>$bookname,'profilebooks'=>$profilebooks);
    return $datas;
}

?>