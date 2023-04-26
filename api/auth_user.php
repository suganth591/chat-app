<?php
include ('conn.php');
$u=$_POST['uname'];
$p=$_POST['pass'];
$stmt="select  id from users where username='$u' and password='$p'";
$res=$conn->query($stmt);
if(mysqli_num_rows($res)>0){
    $array=['code'=>200];
    echo(json_encode($array));
}else{
    $array=['code'=>500];
    echo(json_encode($array));
}
?>