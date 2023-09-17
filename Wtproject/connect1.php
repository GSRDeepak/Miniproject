<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['SUBMIT'])){
    $conn=mysqli_connect('localhost','root','','webtechnologies_project') or die("Connection Failed");

 if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobileno']) && isset($_POST['email']) && isset($_POST['password'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO 'signup' ('firstname','lastname','mobileno','email','password') VALUES ('$firstname','$lastname','$mobileno','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo "Entry successful";
    }
    else{
        echo "Error Occured";
    }
 }
}
?>