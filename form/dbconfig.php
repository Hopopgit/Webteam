<?php

$db_host   = 'bitnami-mysql-b07f.cloudapp.net';
$db_user = 'root';
$db_pass = 'NpNpCI7K';
$db_name     = 'redbeak_db';

	/*$db_host = "localhost";
	$db_name = "dbregistration";
	$db_user = "root";
	$db_pass = "";*/
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>