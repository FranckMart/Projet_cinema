<?php 


require_once("include/config.php");
try{
	$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd);
	$bdd->exec('SET NAMES utf8');
	
} catch (Exception $exception){
	$messageError = $exception->getMessage();
}