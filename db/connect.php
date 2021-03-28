<?php
// database connection
	$server = '127.0.0.1';
	$username = 'root';
	$password = '';

	$schema = 'mekart';
	$pdo = new PDO('mysql:dbname='.$schema.';host='.$server,$username,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
?>	