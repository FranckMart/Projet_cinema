<?php include_once("config.php"); // Ficher d'information de la bdd 
include_once("class/news.php"); // Class Objet News 
include_once("class/media.php"); // Class Objet Media 
session_start(); // Démarrage de la session pour le système de login

// Si l'utilisateur se déconnecte alors la session est détruite 
if (isset($_POST['deco'])) {
    
	session_destroy();
    header("Location: index.php?deco=ok");
    exit;
}

try{
	// Connexion à la bdd 
	$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd);
	// Variable global c'est à dire qu'elle sera accessible sur tout les fichiers PHP 
	$GLOBALS['bdd'] = $bdd;
	// On défini le codage 
	$bdd->exec('SET NAMES utf8');
	

} // envoie d'un message d'erreur si la connexion a échouée 
catch (Exception $exception) {
	$messageError = $exception->getMessage();
}
