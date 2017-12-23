<?php
include("header.php");
?>

<center><h1>Add Wishlist</h1></center>
 
<form method="post" action="addwishprocess.php">
    <table>
        <tr>
            <td> Bookname <input type="text" name="bookname" size="30"></td>
        </tr>
            
        <tr>
            <td> Author <input type="text" name="author" size="30"></td>
        </tr>
    </table>
     
    <input type="reset" value="reset">
    <input type="submit" value="submit">
     
    <BR/>
</form>
</html>