<?php 
namespace app\db; 
$dns = "mysql:dbname=mydb1;host=127.0.0.1" ; 
$user = "root"; 
$password = "aa";

try {
	$db = new \PDO($dns,$user,$password);
}catch(PDOException $e){
	echo "Connection failed : " . $e->getMessage();
}