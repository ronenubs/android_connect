<?php
    include 'config.php';

	try{
   		$conn = new PDO("mysql:host=" . SERVER . ";dbname=". DATABASE ,USER, PASSWORD);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
    	echo "Error: " . $e->getMessage();
    }

    
?>