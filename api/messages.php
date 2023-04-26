<?php
include('conn.php');
$stmt='select * from chat';
$res=$conn->query($stmt);
$ret=array();
while($i=$res->fetch_assoc()){
$ret[]=$i;
}
echo(json_encode($ret));
?>