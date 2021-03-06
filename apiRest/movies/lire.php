<?php

// On inclut les fichiers de configuration et d'accès aux données
include_once '../config/Database.php';
include_once '../models/MoviesController.php';

// Headers requis
// Accès depuis n'importe quel site ou appareil (*)
header("Access-Control-Allow-Origin: *");

// Format des données envoyées
header("Content-Type: application/json; charset=UTF-8");

// Méthode autorisée
header("Access-Control-Allow-Methods: GET");

// Durée de vie de la requête
header("Access-Control-Max-Age: 3600");

// Entêtes autorisées
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // La bonne méthode est utilisée

} else {
    // Mauvaise méthode, on gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}

// On instancie la base de données
$database = new Database();
$db = $database->getConnection();

// On instancie les movies
$movie = new MoviesController($db);

// On récupère les données
$movieList = $movie->getMovies();

// On vérifie si on a au moins 1 movie
if($movieList->rowCount() > 0){
    // On initialise un tableau associatif
    $tabMovies = [];

    // On parcourt les movies
    while($row = $movieList->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $prod = [
            "id" => $video_id,
            "titre" => $video_titre,
            "video_genre_id" => $genre_id
        ];

        $tabMovies[] = $prod;
    }
    // On envoie le code réponse 200 OK
    http_response_code(200);

    // On encode en json et on envoie
    echo json_encode($tabMovies);
}