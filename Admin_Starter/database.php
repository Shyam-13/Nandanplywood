<?php
$server = 'sql208.infinityfree.com';
$username = 'if0_38424711';
$password = 'Shyam1303';
$database = 'if0_38424711_nandanplywood';


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}