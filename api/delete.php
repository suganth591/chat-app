<?php
include('conn.php');
$id=$_GET['id'];
$stmt="update chat set msg='Deleted By User' where id=$id";
$conn->query($stmt);
?>