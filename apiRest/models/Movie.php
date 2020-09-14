<?php

class Movie {
    // Propriétés
    public $id;
    public $titre;
    public $genre_id;

    public function __construct($id, $titre, $genre_id){
        $this->id = $id;
        $this->titre = $titre;
        $this->genre_id = $genre_id;
    }
}