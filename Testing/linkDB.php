<?php
//connect to database
try{
		$pdo = new PDO('mysql:host=localhost', 'root', 'password1');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>
