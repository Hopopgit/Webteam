<?php
$name=$_REQUEST['username'];
$password=$_REQUEST['password'];
$email=$_REQUEST['email'];

$list=array('name'=>$name,'password'=>$password,'email'=>$email);
$c=json_encode($list);
echo $c;		
?>