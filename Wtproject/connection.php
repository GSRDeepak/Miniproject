<?php
$name=$_POST['name'];
$authorname=$_POST['authorname'];
$publisher=$_POST['publisher'];
$edition=$_POST['edition'];
$price=$_POST['price'];
$conn=new musqli('localhost','root','','demodb');
if($conn->connect_error)
?>
