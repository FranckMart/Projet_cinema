
<?php


require_once("config.php");
require_once("/Applications/MAMP/htdocs/Repository-gitKraken/projet_cinema/class/news.php");
require_once('/Applications/MAMP/htdocs/Repository-gitKraken/projet_cinema/class/media.php');
//session_start();

try{
	$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd);
	$GLOBALS['bdd'] = $bdd;
	$bdd->exec('SET NAMES utf8');
	

} catch (Exception $exception) {
	$messageError = $exception->getMessage();
}