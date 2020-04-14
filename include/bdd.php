<?php 


require_once("include/config.php");
try{
	$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd);

	
} catch (Exception $exception){
	$messageError = $exception->getMessage();
}