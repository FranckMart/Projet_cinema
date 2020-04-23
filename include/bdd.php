<?php 
	

require_once("config.php");
//require_once('../class/video.php');


try{
	$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd);
	$bdd->exec('SET NAMES utf8');
	
} catch (Exception $exception){
	$messageError = $exception->getMessage();
}