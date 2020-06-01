<?php include_once("config.php");
include_once("class/news.php");
include_once("class/media.php");
session_start();
if (isset($_POST['deco'])) {
    
	session_destroy();
    header("Location: index.php?deco=ok");
    exit;
}

try{
	$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd);
	$GLOBALS['bdd'] = $bdd;
	$bdd->exec('SET NAMES utf8');
	

} catch (Exception $exception) {
	$messageError = $exception->getMessage();
}
