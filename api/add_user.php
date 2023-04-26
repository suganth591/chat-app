<?php
include('conn.php');
$un=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$stmt="insert into users(username,email,password) values('$un','$email','$pass')";
if($conn->query($stmt)){
    echo("{'status':'success'}");
}
?>
