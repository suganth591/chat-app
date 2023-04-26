<?php
include('conn.php');
$user=$_POST['user'];
$msg=$_POST['msg'];
$stmt="insert into chat(user,msg) values('$user','$msg')";
$conn->query($stmt);
return json_encode(['code'=>200]);
?>