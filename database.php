<?php
$server = 'localhost';
$username = 'root';   /*hmmmm*/  /*hmmm*/
$password = 'root';
$database = 'auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
