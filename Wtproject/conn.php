<?php 
$conn=mysqli_connect("localhost","root","","");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
$name=$_post['name'];
$email=$_post['email'];
$phone=$_post['phone'];
$bgroup=$_post['bgroup'];
$sql="INSERT INTO 'bbank' ('name','email',"