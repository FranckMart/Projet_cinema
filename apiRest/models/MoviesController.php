<?php

include_once 'Movie.php';

class MoviesController {
    // Connexion
    private $connexion;
    private $table = "video"; // Table dans la base de données

    /**
     * Constructeur avec $db pour la connexion à la base de données
     *
     * @param $db
     */
    public function __construct($db){
        $this->connexion = $db;
    }
    
    /**
     * Recuperer la liste totale des films
     *
     */
    public function getMovies(){
        // On écrit la requête
        $sql = "SELECT video_id, video_titre FROM " . $this->table;

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }

    /**
     * Recuperer un seul film selon son id
     */
    public function getMovieById($id) {
        // On écrit la requête
        $sql = "SELECT video_id, video_titre , video_genre_id FROM " . $this->table . " WHERE video_id = :video_id";

        // On prépare la requête
        $query = $this->connexion->prepare( $sql );

        // On attache l'id
        $query->bindParam(':video_id', $id);

        // On exécute la requête
        $query->execute();

        // on récupère la ligne
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // On cree un objet Movie
        $movie = new Movie($result['video_id'], $result['video_titre'], $result['video_genre_id']);

        return $movie;
    }

    public function getMoviebyTitle($titre) {
       
         // On écrit la requête
         $sql = "SELECT video_id, video_titre , video_genre_id FROM " . $this->table . " WHERE video_titre = :video_titre";

         // On prépare la requête
         $query = $this->connexion->prepare( $sql );
 
         // On attache l'id
         $query->bindParam(':video_titre', $titre);
 
         // On exécute la requête
         $query->execute();
 
         // on récupère la ligne
         $result = $query->fetch(PDO::FETCH_ASSOC);
 
         // On cree un objet Movie
         $movie = new Movie($result['video_id'], $result['video_titre'], $result['video_genre_id']);
 
         return $movie;
    }




}